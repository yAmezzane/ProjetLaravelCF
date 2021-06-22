<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Etudiant, App\Filiere, App\Classe;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Ensaj.index');
    }

    public function show(){
        return view('Ensaj.etudiant');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $classes = \DB::table('posts')->where('filieres', 'like', '%'.$search.'%')->paginate(5);
        return view('index', ['classes' => $classes]);
    }


    public function store(Request $request)
    {
        $etudiant = new Etudiant();

        

        $etudiant->cin = $request->input('cin');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->photo = $request->input('photo');
        $etudiant->filiere = $request->input('filiere');
        $etudiant->classe = $request->input('classe');

        $etudiant->save();
        return redirect('/Etudiants')->with('succes', 'Etudiant ajoute');
    }
    public function afficFilieres(){
        return view('Ensaj.filiere');
    }


    public function storeFilieres(Request $request)
    {
        $filiere = new Filiere();

        

        $filiere->code = $request->input('code');
        $filiere->libelle = $request->input('libelle');

        $filiere->save();
        return redirect('/Filieres')->with('succes', 'Filiere ajoute');
    }

    public function statics(Request $request){
        $classes = Classe::all()->groupBy('filiere');
        foreach($classes as $key => $values){
            
        }

    }




}
