<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Inscreption;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function create()
    {
        return view('inscreption');
    }
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        // dump($data);
        User::create($data);
         return redirect()->route('Produits.index');
        // dump($res);
    // view('Dachbord');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Inscreption $inscreption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscreption $inscreption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscreption $inscreption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscreption $inscreption)
    {
        //
    }
}
