<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function notes(){
        $notes=["Mohamed Alaoui" =>"16", "Ahmed Bennani" =>"14", "Rachida kich" =>"6", "Aicha Saaoudi" =>"19", "Noura Alaoui" =>"7", "Samar Rhaoussi" =>"13", "Aicha Siraj" =>"10", "Samiha Hakim" =>"09", "Mohamed Rami"=>"17", "Sami Tazi" =>"7", "Noura Tazi" =>"14"] ;
        uasort($notes, function($a, $b) {
            return $b - $a; 
        });

        return view('formrecherch',['note'=>$notes]);
    }
    public function notescolored(){
        $notes=["Mohamed Alaoui" =>"16", "Ahmed Bennani" =>"14", "Rachida kich" =>"6", "Aicha Saaoudi" =>"19", "Noura Alaoui" =>"7", "Samar Rhaoussi" =>"13", "Aicha Siraj" =>"10", "Samiha Hakim" =>"09", "Mohamed Rami"=>"17", "Sami Tazi" =>"7", "Noura Tazi" =>"14"] ;
        uasort($notes, function($a, $b) {
            return $b - $a; 
        });

        return view('formrecherchcolored',['note'=>$notes]);
    }
}
