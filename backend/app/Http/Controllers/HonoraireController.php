<?php

namespace App\Http\Controllers;

use App\Models\Honoraire;
use App\Models\Ligne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HonoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $honoraire = Honoraire::with('ligne')->get();
        
        return response()->json([
            'error' => false, 
            'honoraires' => $honoraire,
            'code' => 200 , 
            'message' => 'succes' ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'heures' => 'required',
            'ligne_id' => 'required',
        ]);


        $honoraire = array();
        $honoraire = json_decode($request->heures,true);
        
        for ($h = 0; $h < count($honoraire); $h++) {
            $v = Honoraire::whereHeure($honoraire[$h])->whereLigneId($request->ligne_id)->first();
            if(!$v){
                $honoraires = new Honoraire();
                $honoraires->heure = $honoraire[$h];
                $honoraires->ligne_id = $request->ligne_id;
                $honoraires->save();
            }
        }


        return $this->resp(false, 200, null, "Honoraire crée avec succes");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $honoraire = Honoraire::whereId($request->honoraire_id)->first();
        if ($honoraire) {

            $validator = Validator::make($request->all(), [
                'heure' => 'required',
            ]);

            $honoraire->heure = $request->heure;
            $honoraire->save();

            return response()->json([
                "error" => false,
                "message" => "mise à jour avec success",
                "code" => 200,
            ]);
        } else {
            return response()->json([
                "error" => true,
                "message" => "Honoraire non retrouvé",
                "code" => 400,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $honoraire = Honoraire::find($id);

        if ($honoraire) {
            $honoraire->delete();
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
