<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specialitie;
use App\Doctors;

class DoctorsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $doctors = Doctors::all();
        /*$doctors = Doctors::with(['specialitie','user'])->get();
        var_dump($doctors);
        die();*/
        return view('doctors/searchDoctor',['doctors' => $doctors]);
    }

    /**
     * Afficher la liste des docteurs en fonction d'une spécialité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /* public function consult_doctor(Request $request, $id)
    {
        //Recupération de l'id
        $specialities = Specialitie::find($id);
        //requete SQL
        
        return view('doctors/consultDoctor', ['doctors' => $doctors]);
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}