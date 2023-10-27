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


class UserController extends Controller
{
    public function index()
        {
            //
            $members = User::all();

            return response()->json([
                'error' => false,
                'members' => $members,
                'code' => 200 ,
                'message' => 'succes' ]);
        }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'birthday' => 'required|string',
            'fonction' => 'required|string',
            'telephone' => 'required',
            'country' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            return $this->resp(true, 401, null, "L'adresse e-mail que vous avez fournie est déjà associée à un compte.", null);
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

        // Générer un mot de passe aléatoire de 6 caractères
        $randomPassword = Str::random(6);
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'country' =>  $request->country,
            'adresse' => $request->adresse,
            'birthday' => $request->birthday,
            'fonction' => $request->fonction,
            'password' => Hash::make($randomPassword),
            'telephone' => $request->telephone,
            'sex' => $request->sex,
            'role' => 3,
//             'avatar' => "Image",
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        if($user){
        $is_send_emaiil = Mail::send('email.emailVerificationEmail', ['token' => $token, 'password' => $randomPassword], function($message) use($user){
                    $message->to($user->email);
                    $message->subject("Courrier de bienvenue dans la communauté Tdev!");
                });
        }

        if ($is_send_emaiil) {
            return $this->resp(false, 200, $user, "Compte crée avec succes", $token);
        } else {
            return $this->resp(true, 400, null, "Erreur survenue lors de la creation du compte", null);
        }

    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::whereEmail($request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }

        if ($user->status === 0) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }


        $token = $user->createToken('myapptoken')->plainTextToken;

        return  $this->resp(false, 200, $user, "connexion reussie", $token);

    }

    public function findMember($id){
            $user = User::find($id)->first();
            return $this->resp(false, 200, $user, "Operation effectuée avec succes", null);
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
