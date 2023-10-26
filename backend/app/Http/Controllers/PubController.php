<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    //
    public function addPub(Request $request){

        $request->validate([
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image_extension = $image->guessExtension();
            $image_name = 'images/pub/' . md5_file($image->getRealPath()) . '.' . $image_extension;


            $ex = ['jpg', 'jpeg', 'png'];

            if (!in_array($image_extension, $ex)) {

                return response([
                    'message' => 'Type de fichier non pris en charge !'
                ], 401);
            }
            $path = $request->file('image')->move('images/pub/', $image_name);
        }


        $pub = new Pub();
        $pub->nom = $request->nom;
        $pub->date_debut = $request->date_debut;
        $pub->date_fin = $request->date_fin;
        $pub->image = $image_name;
        $res = $pub->save();
        if($res){
            return $this->resp(false, 200, $res, "Pub crée avec succes");
        }else{
            return $this->resp(true, 500, $res, "Erreur survenue lors de la creation");
        }
    }


    public function getAllPub(){
        $pubs = Pub::all();
        return $this->resp(false, 200, $pubs, "Operation reussie");
    }


    public function changePubStatus(Request $request){
        $pub = Pub::find($request->id);
        if($pub){
            $pub->status = $request->status;
            $res = $pub->save();
            if($res){
                return $this->resp(false, 200, $res, "Status changé avec succes");
            }else{
                return $this->resp(true, 500, $res, "Erreur survenue lors du changement du status");
            }
        }else{
            return $this->resp(true, 400, $pub, "Element non retrouvé");
        }
    }


    public function destroy(string $id)
    {
        //
        $pub = Pub::find($id);

        if ($pub) {
            $pub->delete();
            return response()->json([
                "error" => false,
                "message" => "Element supprimé avec succès"
            ]);
        } else {
            return response()->json([
                "error" => true,
                "message" => "Element non trouvé"
            ]);
        }
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
