<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateuserRequist;
use App\Http\Requests\UserRequest;
use App\Models\Inscreption;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return View('users.dachbord',compact('users'));
    }
    public function create()
    {
        return view('inscreption');
    }
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        User::create($data);
         return redirect()->route('Produits.index');
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


    /**
     * Update the specified resource in storage.
     */
    public function update(updateuserRequist $request,int $id)
    {
              $request->validated();
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            ];
            
            $user = User::findOrFail($id);
      

        $user->update($data);

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        return redirect()->route('role.index');
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.editUser', compact('user'));
    }

}    

    // public function showUserForm(){
    //     return view('UsersForm');    
    // }

    // public function showUsers(){
    //     $users = User::all();    
    //     return view('UsersList', compact('users'));
    // } 

