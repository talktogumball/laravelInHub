<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubForm extends Controller
{
    public function index($prenom='',$nom='',$sexe='',$email=''){
        return view('form',['prenom'=>$prenom,
        'nom'=>$nom,
        'sexe'=>$sexe,
        'email'=>$email]);

    }
    public function afficher(Request $req){
        $prenom = $req->input('prenom');
        $nom = $req->input('nom');
        $sexe = $req->input('sexe');
        $email = $req->input('email');

        return  view('form',[
            'prenom'=>$prenom,
            'nom'=>$nom,
            'sexe'=>$sexe,
            'email'=>$email
    ]);
    }
}
