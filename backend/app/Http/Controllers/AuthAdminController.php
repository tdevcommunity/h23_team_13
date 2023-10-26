<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthAdminController extends Controller
{
    //
    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'telephone' => 'required',
            'password' => 'required|min:4'
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        $user = Admin::where('email', $request->email)->first();
        if ($user) {
            return $this->resp(true, 401, null, "Email deja utiliser", null);
        }

        $user = Admin::where('telephone', $request->telephone)->first();
        if ($user) {
            return $this->resp(true, 403, null, "Telephone deja utiliser", null);
        }

        $image_name = null;
        $image_extension = null;

        if ($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $image_extension = $image->guessExtension();
            $image_name = 'images/admin/' . md5_file($image->getRealPath()) . '.' . $image_extension;

            $ex = ['jpg', 'jpeg', 'png'];

            if (!in_array($image_extension, $ex)) {
                return $this->resp(true, 400, null, "Type de fichier non pris en charge !", null);
            }

            $path = $request->file('avatar')->move('images/admin/', $image_name);
        }


        $user = Admin::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone ,
            'role' => 1,
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
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = Admin::whereEmail($request->email)
                ->orWhere("telephone", $request->email)
                ->orWhere("telephone", "228" . $request->email)
                ->orWhere("telephone", "+228" . $request->email)
                ->orWhere("telephone", "00228" . $request->email)
                ->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }

        if ($user->status == 1) {
            return $this->resp(true, 400, null, "Utilisateur introuvable !", null);
        }


        $token = $user->createToken('myapptoken')->plainTextToken;


        return  $this->resp(false, 200, $user, "connexion reussie", $token);

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
