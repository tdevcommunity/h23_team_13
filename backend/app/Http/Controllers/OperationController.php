<?php

namespace App\Http\Controllers;

use App\Models\operation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OperationController extends Controller
{
    //
    public function getPaieOperation(){
        $operation = operation::whereNotNull('frais')->with('user','sender','receiver')->orderBy('id','DESC')->get();
        return $this->resp(false, 200, $operation, "operation effectuée avec succes", null);
    }


    public function getOperationByuser($id){
        $operation = operation::where('user_id',$id)->orWhere('receiver',$id)->with('user','sender','receiver')->orderBy('id','DESC')->get();
        return $this->resp(false, 200, $operation, "operation effectuée avec succes", null);
    }


    public function buyTicketForMe(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'ticket_qte' => 'required',
            'frais' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        $user = User::find($request->user_id);
        if(!$user){
            return $this->resp(false, 401, $user, "utilisateur introuvable", null);
        }

        $operation = operation::create([
            'user_id' => $request->user_id,
            'ticket_qte' => $request->ticket_qte,
            'frais' => $request->frais ,
            'memo' => 'achat simple',
        ]);

        if ($operation) {

            $user = User::find($request->user_id);
            $user->ticket += $operation->ticket_qte;
            $user->save();
            
            return $this->resp(false, 200, $user, "operation effectuée avec succes", null);
        } else {
            return $this->resp(true, 400, null, "Erreur survenue lors de l operation", null);
        }

    }

    public function buyTicketForOther(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'immatricule' => 'required',
            'ticket_qte' => 'required',
            'frais' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }    
    

        $user = User::find($request->user_id);
        if(!$user){
            return $this->resp(false, 401, $user, "utilisateur introuvable", null);
        }

        $other = User::whereImmatricule($request->immatricule)->first();
        if(!$other){
            return $this->resp(true, 402, null, "receveur introuvable", null);
        }

        $operation = operation::create([
            'user_id' => $request->user_id,
            'receiver' => $other->id,
            'ticket_qte' => $request->ticket_qte,
            'frais' => $request->frais ,
            'memo' => 'achat pour une autre personne',
        ]);

        if ($operation) {

            $user = User::find($operation->receiver);
            $user->ticket += $operation->ticket_qte;
            $user->save();
            
            return $this->resp(false, 200, null, "operation effectuée avec succes", null);
        } else {
            return $this->resp(true, 403, null, "Erreur survenue lors de l operation", null);
        }

    }


    public function transferTicker(Request $request){

        $validator = Validator::make($request->all(), [
            'sender' => 'required',
            'immatricule' => 'required',
            'ticket_qte' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->resp(true, 400, null, $validator->getMessageBag(), null);
        }

        if($request->ticket_qte < 1){
            return $this->resp(true, 407, null, "quantité saisie invalide", null);
        }

        $user = User::find($request->sender);
        if($user){

            if($user->immatricule == $request->immatricule){
                return $this->resp(true, 406, null, "vous pouvez pas transferer un ticket a vous meme", null);
            }


            if($user->ticket < $request->ticket_qte){
                return $this->resp(true, 401, null, "ticket insuffisant", null);
            }


            $other = User::whereImmatricule($request->immatricule)->first();
            if(!$other){
                return $this->resp(true, 402, null, "receveur introuvable", null);
            }

            $operation = operation::create([
                'user_id' => $request->sender,
                'ticket_qte' => $request->ticket_qte,
                'sender' => $request->sender,
                'receiver' => $other->id,
                'memo' => 'transfert pour une autre personne',
            ]);

            if ($operation) {

                $user = User::find($operation->sender);
                $user->ticket -= $operation->ticket_qte;
                $user->save();

                $other = User::find($operation->receiver);
                $other->ticket += $operation->ticket_qte;
                $other->save();
                
                return $this->resp(false, 200, $user, "operation effectuée avec succes", null);
            } else {
                return $this->resp(true, 404, null, "Erreur survenue lors de l operation", null);
            }

        }else {
            return $this->resp(true, 405, null, "Utilisateur introuvable", null);
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
