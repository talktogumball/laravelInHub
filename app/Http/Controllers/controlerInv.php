<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlerInv extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page)
    {
        if ($page === 'accueil' || $page === 'contact' || $page === 'presentation') {
            return view($page);
        }
        else{
            echo 'page   :     '.$page.'   doesnt exist';
        }
    }
}
