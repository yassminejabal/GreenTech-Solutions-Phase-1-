<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use Illuminate\View\View;
use App\Http\Controllers\Route;
use App\Models\Favoris;

class produitController extends Controller
{

    public function index()
    {

        $produits = Produit::with('categorie')->get();
        
        return view('produits.Dachbord', compact('produits'));

    }

    public function create()
    {
        return view("produits.create");
    }


    public function store(Request $request)
    {   
        $produit = new produit();
        $produit->is_favoris = false;
        $produit->name = $request->name;
        $produit->prix = $request->prix;
        $produit->image_url = $request->image_url;
        $produit->description = $request->description;
        $produit->stock = $request->stock;
        $produit->categorie_id = $request->categorie_id;
        $produit->save();
        return redirect()->route('Produits.index');
    }

    public function show(string $id)
    {
    }


    public function edit(string $id)
    {
        $produit = produit::with('categorie')->find($id);
        return View('produits.edit', compact('produit'));
    }


    public function update(Request $request, string $id)
    {
        $produit = produit::find($id);
        $categorie_id = $produit->categorie_id;
        // dd($categorie_id);
        $produit->name = $request->name;
        $produit->categorie_id = $categorie_id;
        $produit->prix = $request->prix;
        $produit->image_url = $request->image_url;
        $produit->description = $request->description;
        $produit->stock = $request->stock;
        $produit->categorie_id = $produit->categorie_id;
        $produit->save();
        return redirect()->route('Produits.index');
    }

    public function destroy(string $id)
    {
        produit::destroy($id);
        return redirect()->route('Produits.index');
    }


public function search(Request $request)
{
    // dd($request);
    if ($request->has('search')) {

        $query = Produit::query();
        $query->where('name', 'like', '%' . $request->search . '%');
        $items = $query->get();
        return view('produits.Dachbord', ['produits' => $items]);
    }
}

public function filter(Request $request)
{
    // dd($request);
    $query = Produit::query();

    if ($request->has('category')) {
         $query->where('categorie_id', $request->category);
    }

    $produits = $query->get();

    return view('produits.Dachbord', compact('produits'));
}

}
