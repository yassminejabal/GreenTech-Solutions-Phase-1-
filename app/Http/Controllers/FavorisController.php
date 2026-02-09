<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
        public function index()
    {

    }

    public function create()
    {
        
    }


    public function store(Request $request, $id)
    {
        // dd($id);
        $user = Auth::user()->id;
        User::find($user);
        // dd($userr);
    
        $prroduct = Produit::find($id);
        // dump($prroduct->is_favoris);
        // dump(!$prroduct->is_favoris);
        $prroduct->is_favoris = !$prroduct->is_favoris;
        
        $id_User = Auth::user()->id;
        
        $newfavoris = new Favoris();
        $newfavoris->Produit_id = $prroduct->id;
        $newfavoris->user_id = $id_User;
        $newfavoris->save();
        $prroduct->save();
        return redirect()->route('Produits.index');
    }

    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }


    public function search(Request $request)
    {

        
    }
}
