<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class homeController extends Controller
{
    //tari9a al3adiya
    public function index(Request $request)
    {
        return View("home", [
            $nom = 'nom' => $request->nom
        ]);
    }
    // tari9a profitionnelle compact();
    public function afficher()
    {

        $ecole = 'Youcoude';
        $name = "yassmin";
        $myarray = [12, 2, 34, 56, 67, 324];
       
        return View("home", compact('myarray', 'ecole'));
    }
}

    //f blast hadi dart  compact ()kan3tiwha dakxi li brina nsifto f url
    //bax nxado b request dima katsna string bla $