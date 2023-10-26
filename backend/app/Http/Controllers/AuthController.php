<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class AuthController extends Controller
{

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'immatricule' => 'required',
            'telephone' => 'required',
            'password' => 'required|min:4'
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            return $this->resp(true, 401, null, "Email deja utiliser", null);
        }

        $user = User::where('immatricule', $request->immatricule)->first();
        if ($user) {
            return $this->resp(true, 402, null, "Numero Immatricule deja utiliser", null);
        }

        $user = User::where('telephone', $request->telephone)->first();
        if ($user) {
            return $this->resp(true, 403, null, "Telephone deja utiliser", null);
        }

        $image_name = null;
        $image_extension = null;

        if ($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $image_extension = $image->guessExtension();
            $image_name = 'images/user/' . md5_file($image->getRealPath()) . '.' . $image_extension;

            $ex = ['jpg', 'jpeg', 'png'];

            if (!in_array($image_extension, $ex)) {
                return $this->resp(true, 400, null, "Type de fichier non pris en charge !", null);
            }

            $path = $request->file('avatar')->move('images/user/', $image_name);
        }

        $key = '0locaX4PNXP68A1pyp6UI9Np1lRtfhj1nvgS';
        $unique = $this->generateCode($request->immatricule);
        $pass = [
            'id' => $request->immatricule,
            'pass' => $unique
        ];

        $jwt = JWT::encode($pass, $key, 'HS256');

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'auth' => $jwt,
            'uid' => $unique,
            'email' => $request->email,
            'immatricule' => $request->immatricule,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone ,
            'role' => 2,
            'avatar' => $image_name,
        ]);
        
        $token = $user->createToken('myapptoken')->plainTextToken;

        if ($user) {
            
            return $this->resp(false, 200, $user, "Compte crée avec succes", $token);
        } else {
            return $this->resp(true, 400, null, "Erreur survenue lors de la creation du compte", null);
        }

    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'telephone' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::whereImmatricule($request->telephone)
                ->orWhere("email", $request->telephone)
                ->orWhere("telephone", $request->telephone)
                ->orWhere("telephone", "228" . $request->telephone)
                ->orWhere("telephone", "+228" . $request->telephone)
                ->orWhere("telephone", "00228" . $request->telephone)
                ->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }

        if ($user->status == 1) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }


        $token = $user->createToken('myapptoken')->plainTextToken;
        
        //$key = 'example_key';
        //$jwt = JWT::encode($user, $key, 'HS256');

        return  $this->resp(false, 200, $user, "connexion reussie", $token);

    }


    public function getEtudiantByRole($role){
        $user = User::whereRole($role)->whereStatus(0)->get();
        return $this->resp(false, 200, $user, "Operation effectuee avec succes", null);
    }
    
    public function generateCode($item)
    {
        $item = str_replace(" ", "", $item);
        return str_shuffle($item. rand(20, 985)); 
    }


    public function getTicketByUser($id){
        $user = User::select('ticket')->whereId($id)->first();
        return $this->resp(false, 200, $user, "Operation effectuee avec succes", null);
    }

    public function updateAvatar(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'avatar' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        $user = User::find($request->id);
        if (!$user) {
            return $this->resp(true, 401, null, "Utilisateur introuvable", null);
        }
        
        $user->avatar = $request->avatar;
        $user->save();

        return $this->resp(false, 200, $user, "Operation effectuee avec succes", null);

    }

    public function checkUserByImmatricule(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'immatricule' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::whereImmatricule($request->immatricule)->first();


        return  $this->resp(false, 200, $user, "succes",null);

    }

    public function update(Request $request)
    {
        $user = User::whereId($request->id)->first();
        if ($user) {

            $validator = Validator::make($request->all(), [
                'nom' => 'required|string',
                'prenom' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return $this->resp(true, 400, null, $validator->getMessageBag(), null);
            }

            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->save();

            return response()->json([
                "error" => false,
                "user" => $user,
                "message" => "mise à jour avec success",
                "code" => 200,
            ]);
        } else {
            return response()->json([
                "error" => true,
                "message" => "Element non retrouvé",
                "code" => 400,
            ]);
        }
    }

    public function sendOpt(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return $this->resp(true, 401, null, "Email deja utiliser", null);
        }

        $user = User::where('immatricule', $request->immatricule)->first();
        if ($user) {
            return $this->resp(true, 402, null, "Numero Immatricule deja utiliser", null);
        }

        $user = User::where('telephone', $request->telephone)->first();
        if ($user) {
            return $this->resp(true, 403, null, "Telephone deja utiliser", null);
        }

        $code = rand(111111,999999);
        return $this->sendOptByMail($request->email,$code);
    }

    public function sendOptByMail($email,$code)
    {
        
        $data = [
            'subject' => 'Bienvenue sur e-ticket',
            'template' => 'otp',
            'code' => $code
        ];  
        

        try {
            Mail::to($email)->send(new AuthMail($data));
            return response()->json([
                'error' => false,
                'code' => $code,
                'message' => 'Mail envoyer !',
                'status_code' => 200
            ]);
        } catch (Exception $th) {
            return response()->json([
                'error' => true,
                'err' => $th,
                'message' => 'Mail non envoyer !',
                'status_code' => 400
            ]);
        }
    }

    public function changePassword(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if ($user) {

            $user->password = Hash::make($request->password);
            $user->save();

            return $this->resp(false, 200, null, "Mot de passe modifié avec succes", null);
            
        } else {

            return $this->resp(true, 400, null, "Utilisateur introuvable", null);
        }
    }

    public function motDePasseOublier(Request $request){
        $user = User::whereEmail($request->email)->first();
        if($user){
            $password = rand(1111,9999);//Str::random(8);
            $this->sendCodeByMail($user->email, $password);
            return response()->json([
                'error' => false,
                'code' => $password,
                'message' => 'Mail envoyé avec succes !',
                'status_code' => 200
            ]);
        }else{
            
            return $this->resp(true, 400, null, "Utilisateur introuvable", null);
        }
        
    }


    public function sendCodeByMail($email, $code)
    {
        $data = [
            'subject' => 'Code de verification',
            'template' => 'cp',
            'code' => $code
        ];

        try {
            Mail::to($email)->send(new AuthMail($data));
            return response()->json([
                'error' => false,
                'code' => $code,
                'message' => 'Mail envoyer !',
                'status_code' => 200
            ]);
        } catch (Exception $th) {
            return response()->json([
                'error' => true,
                'bg' => $th,
                'message' => 'Mail non envoyer !',
                'status_code' => 400
            ]);
        }
    }

    public function resp($error, $code, $data, $message, $token)
    {

        return response()->json([
            'error' => $error,
            'code' => $code,
            'user' => $data,
            'message' => $message,
            'token' => $token
        ]);

    }


}
