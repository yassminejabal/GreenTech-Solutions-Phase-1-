<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use Illuminate\View\View;

class produitController extends Controller
{

    public function index()
    {
        $produits = Produit::with('categorie')->get();
        return view('produits.dachboard', compact('produits'));
    }
    
    public function create()
    {
        return view("produits.create");
    }


    public function store(Request $request)
    {

        $produit = new produit();
        $produit->name = $request->name;
        $produit->prix = $request->prix;
        $produit->image_url = $request->image_url;
        $produit->description = $request->description;
        $produit->stock = $request->stock;

        $produit->categorie_id = $request->categorie_id;
        $produit->save();
        return redirect()->route('Produits');

    }

    public function show(string $id)
    {
        $produit=produit::with('categorie')->find($id);
        return  view('produits.show',compact('produit'));
    }


    public function edit(string $id)
    {
        $produit=produit::with('categorie')->find($id);
        return View('produits.edit',compact('produit'));
    }


    public function update(Request $request, string $id)
    {
        $produit=produit::find($id);
           $produit->name = $request->name;
        $produit->category_id = $request->category_id;
        $produit->prix = $request->prix;
        $produit->image_url = $request->image_url;
        $produit->description = $request->description;
        $produit->stock = $request->stock;
        $produit->categorie_id = $request->categorie_id;
        $produit->save();
        return redirect()->route('Produits.index');
    }

    public function destroy(string $id)
    {
        produit::destroy($id);
        return redirect()->route('Produits.index');
    }
}
https://www.youtube.com/watch?v=iQlJbGXfk0Y&list=PPSV