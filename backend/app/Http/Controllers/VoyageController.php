<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\VoyageLigne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoyageController extends Controller
{
    //
    public function getAllVoyage(){
        $voyage = Voyage::with('ligne','user','passagers')->get();
        return $this->resp(false, 200, $voyage, "succes");  
    }

    public function getVoyageDetail($id){
        $voyage = Voyage::whereId($id)->with('ligne','user','passagers')->first();
        return $this->resp(false, 200, $voyage, "succes");
    }

    public function getHistoriqueVoyage($id){
        $voyage = VoyageLigne::whereUserId($id)->with('user','voyage')->get();
        return $this->resp(false, 200, $voyage, "succes");  
    }
    

    public function getVoyageByDelege($id){
        $voyage = Voyage::whereUserId($id)->where('date','=',date('Y-m-d'))->with('ligne','user','passagers')->get();
        return $this->resp(false, 200, $voyage, "succes");
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'heure' => 'required',
            'user_id' => 'required',
            'ligne_id' => 'required',
        ]);

        $c = Voyage::where('date' ,'=',date('Y-m-d'))
                    ->where('heure' ,'=' ,$request->heure)
                    ->where('user_id','=',$request->user_id)
                    ->first();

        if(!$c){
            $voyage = new Voyage();
            $voyage->date = date('Y-m-d');
            $voyage->heure = $request->heure;
            $voyage->nbre = 1;
            $voyage->code = 'code';
            $voyage->pin = $this->generateCode();
            $voyage->user_id = $request->user_id;
            $voyage->ligne_id = $request->ligne_id;
            $v = $voyage->save();
            if($v){
                return $this->resp(false, 200, $v, "Voyage crée avec succes");
            }else{
                return $this->resp(false, 400, $v, "Erreur survenue lors de la creation");
            }
        }else{
            return $this->resp(false, 400,null, "Ce voyage existe deja !");
        }
    }


    public function generateCode(){
        do {
            $code = rand(1111111,9999999);
            $codeUniq = substr($code,0,4);
        } while (Voyage::whereCode($codeUniq)->where('date' , date('Y-m-d'))->exists());
        return $codeUniq;
    }


    public function resp($error, $code, $data, $message)
    {

        return response()->json([
            'error' => $error,
            'code' => $code,
            'data' => $data,
            'message' => $message
        ]);

    }

}
