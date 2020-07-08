<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Specialitie;
use App\User;

class SpecialitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * afficher la liste des spécilialités.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $specialities = Specialitie::all();
        return view('specialitie/index',['specialities' => $specialities]);
        /*return view('specialitie.index')->with('specialities', $specialities);*/
        
    }

    /**
     * pour envoyer le formulaire pour la création 
     * d'une nouvelle spécialité.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialitie/create');
    }

    /**
     * pour créer une nouvelle spécialité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate( 
            ['name' => 'bail|required|unique:specialities|alpha_dash|max:100']);

         $specialitie = new Specialitie;
         $specialitie->name = $request->input('name');
         $specialitie->created_at = now();
         $specialitie->save();

         //return redirect('specialitie');
        /*Session::flash('flash_message', 'Specialitie successfully added!');*/

         return redirect()->route('specialitie.index');
    }

    /**
     * pour afficher les données d'une spécialité.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$specialitie = Specialitie::find($id);
        //dd($specialitie);

        //approche bas niveau sans ORM
        $specialitie = \DB::table('specialities')
        ->where('id', '=',$id)
        ->get();

        return view('specialitie/show',['specialitie' => $specialitie]);
    }

    /**
     * pour envoyer le formulaire pour la modification d'une spécialité.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        //$specialitie = Specialitie::find($id);
        //dd($specialitie->name);
        $specialitie = \DB::table('specialities')
        ->where('id', '=',$id)
        ->get();
        /*echo'Edit';
        var_dump($specialitie[0]->id);
        die();*/
        return view('specialitie/edit',['specialitie' => $specialitie[0]]);
    }

    /**
     * pour modifier les données d'une spécialité.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$specialitie = new Specialitie;
        $specialitie->name = $request->input('name');
        $specialitie->save();*/

        //return redirect('specialitie');

        $request->validate( 
            ['name' => 'bail|required|unique:specialities|alpha_dash|max:100'.$id]);

        $specialitie = Specialitie::find($id);
        /*$specialitie = \DB::table('specialities')
        ->where('id', '=',$id)
        ->get();
        echo'update';
        //var_dump($specialitie);
        //die();*/
        $specialitie->name = $request->input('name');
        $specialitie->updated_at = now();
        $specialitie->save();

        return redirect()->route('specialitie.index');
    }

    /**
     * pour supprimer une spécialité.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$specialitie = \DB::table('specialities')
        ->where('id', '=',$id)
        ->get();
        dd($specialitie);*/
        $specialitie = Specialitie::find($id);
        $specialitie->delete();

        return redirect()->route('specialitie.index');
    }
}