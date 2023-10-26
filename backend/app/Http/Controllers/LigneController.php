<?php

namespace App\Http\Controllers;

use App\Models\Ligne;
use App\Models\User;
use App\Models\UserLigne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LigneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ligne = Ligne::with('honoraire')->get();
        
        return response()->json([
            'error' => false, 
            'lignes' => $ligne,
            'code' => 200 , 
            'message' => 'succes' ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function getOneUserLigne($id){
        $ul = UserLigne::whereUserId($id)->with('user','ligne')->first();
        return $this->resp(false, 200, $ul, "Operation effectuée avec succes");
    }

    public function getUserLigne(){
        $ul = UserLigne::with('user','ligne')->get();
        return $this->resp(false, 200, $ul, "Operation effectuée avec succes");
    }

    public function addUserLigne(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'ligne_id' => 'required',
        ]);

        $ul = new UserLigne();
        $ul->user_id = $request->user_id;
        $ul->ligne_id = $request->ligne_id;
        $res = $ul->save();

        if($res){
            $user = User::find($request->user_id);
            $user->role = 1;
            $user->save();
            return $this->resp(false, 200, $res, "Utilisateur affecté au bus avec succes");
        }else{
            return $this->resp(true, 500, $res, "Erreur survenue lors de l'affectation");
        }
    }


    public function RemoveUserLigne($id){
        $ul = UserLigne::find($id);
        if($ul){
            $user = User::find($ul->user_id);
            $user->role = 2;
            $user->save();
            $ul->delete();
            return $this->resp(true, 500, $ul, "Operation effectuée avec succes");
        }else{
            return $this->resp(true, 500, $ul, "Erreur survenue lors de l'operation");
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
        ]);


        $ligne = Ligne::create([
            'nom' => $request->nom,
            'intitule' => $request->intitule,
            'kilometre' => $request->kilometre,
            'distance' => $request->distance,
            'arret' => $request->arret,
        ]);

        return $this->resp(false, 200, $ligne, "ligne crée avec succes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $ligne = Ligne::whereId($request->ligne_id)->first();
        if ($ligne) {

            $validator = Validator::make($request->all(), [
                'nom' => 'required',
            ]);

            $ligne->nom = $request->nom;
            $ligne->intitule = $request->intitule;
            $ligne->kilometre = $request->kilometre;
            $ligne->distance = $request->distance;
            $ligne->arret = $request->arret;
            $ligne->save();

            return response()->json([
                "error" => false,
                "message" => "mise à jour avec success",
                "code" => 200,
            ]);
        } else {
            return response()->json([
                "error" => true,
                "message" => "Evenement non retrouvé",
                "code" => 400,
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ligne = Ligne::find($id);

        if ($ligne) {
            $ligne->delete();
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
}
