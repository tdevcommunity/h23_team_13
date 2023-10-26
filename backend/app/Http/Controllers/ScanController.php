<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voyage;
use App\Models\VoyageLigne;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ScanController extends Controller
{
    //
    public function danger(){
        VoyageLigne::truncate();
        return response()->json(['message' => 'ok']);
    }

    public function scanWithImmatricule(Request $request){

        $user = User::whereImmatricule($request->immatricule)->first();
        if ($user) {

            if($user->ticket >= 1 ){
                $vr = VoyageLigne::where('voyage_id' , $request->voyage_id)->where('user_id',$user->id)->first();
                
                if(!$vr){
                        $user->ticket -= 1;
                        if($user->save()){
                            $vl = VoyageLigne::create([
                                'voyage_id' => $request->voyage_id,
                                'user_id' => $user->id
                            ]);
                            return $this->resp(false, 200,null, "Code valider avec succes");
                        }

                }
                
                return $this->resp(true, 402,null, "Cet utilisateur appartient deja a ce voyage");
            }else{
                return $this->resp(true, 400,null, "Ticket epuisé");
            }
            
        }else{
            return $this->resp(true, 401,null, "Utilisateur introuvable");
        }
    }

    public function autoScan(Request $request){

        $user = User::whereId($request->id)->first();
        if ($user) {

            if($user->ticket >= 1 ){
                $v = Voyage::whereCode($request->code)->first();
                if(!$v){
                    return $this->resp(true, 403,null, "Voyage introuvable");
                }
                $vr = VoyageLigne::where('voyage_id' , $v->id)->where('user_id',$user->id)->first();
                
                if(!$vr){
                        $user->ticket -= 1;
                        if($user->save()){
                            $vl = VoyageLigne::create([
                                'voyage_id' => $request->voyage_id,
                                'user_id' => $user->id
                            ]);
                            return $this->resp(false, 200,null, "Code valider avec succes");
                        }

                }
                
                return $this->resp(true, 402,null, "Cet utilisateur appartient deja a ce voyage");
            }else{
                return $this->resp(true, 400,null, "Ticket epuisé");
            }
            
        }else{
            return $this->resp(true, 401,null, "Utilisateur introuvable");
        }
    }

    public function scanQr(Request $request){
        //scanner_id
        $key = '0locaX4PNXP68A1pyp6UI9Np1lRtfhj1nvgS';
        $decoded = JWT::decode($request->code, new Key($key, 'HS256'));

        $user = User::where('immatricule', $decoded->id)->where('uid', $decoded->pass)->first();
        if ($user) {

            if($user->ticket >= 1 ){
                $vr = VoyageLigne::where('voyage_id' , $request->voyage_id)->where('user_id',$user->id)->first();
                
                if(!$vr){
                    /* DB::beginTransaction();
                    try { */
                        $user->ticket -= 1;
                        if($user->save()){
                            $vl = VoyageLigne::create([
                                'voyage_id' => $request->voyage_id,
                                'user_id' => $user->id
                            ]);
                            /* $vl = new VoyageLigne();
                            $vl->voyage_id = $request->voyage_id;
                            $vl->user_id = $user->id;
                            $vl->save(); */
                            return $this->resp(false, 200,null, "Code valider avec succes");
                        }
                   /*  }catch(ValidationException $e)
                    {
                        DB::rollback();
                        return $this->resp(true, 403,null, "Une erreur inconnue est survenue");
                    }  */

                }
                
                return $this->resp(true, 402,null, "Cet utilisateur appartient deja a ce voyage");
            }else{
                return $this->resp(true, 400,null, "Ticket epuisé");
            }
            
        }else{
            return $this->resp(true, 401,null, "Utilisateur introuvable");
        }

    }

    public function generateNewQr($id){

        $user = User::find($id);
        if($user){
            $key = '0locaX4PNXP68A1pyp6UI9Np1lRtfhj1nvgS';
            $unique = $this->generateCode($user->immatricule);

            $pass = [
                'id' => $user->immatricule,
                'pass' => $unique
            ];

            $jwt = JWT::encode($pass, $key, 'HS256');

            $user->auth = $jwt;
            $user->uid = $unique;
            $user->save();
            $e = User::whereId($id)->first();
            return $this->resp(false, 200,$e, "Operation effectuee avec succes");
        }else{
            return $this->resp(true, 401,null, "Utilisateur introuvable");
        }
    }

    public function generateCode($item)
    {
        $item = str_replace(" ", "", $item);
        return str_shuffle($item. rand(20, 985)); 
    }

    public function resp($error, $code,$data, $message)
    {

        return response()->json([
            'error' => $error,
            'data' => $data,
            'code' => $code,
            'message' => $message
        ]);

    }
}
