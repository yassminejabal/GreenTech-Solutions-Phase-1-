<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rolerequest;
use App\Models\Permession;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function create()
    {

        $permesstions = Permession::all();
        return View('roles.createRole', compact('permesstions'));
    }



    public function update(Rolerequest $request,role $role)
    {
        $role->update([
            'name'=>$role->name,
        ]);
        // dd($role->permessions()->detach());
        dd($role->permessions()->attach($request->permissions));
        return redirect()->route('role.index');
       
    }
    public function edit(Request $request ,int $id)
    {
        
         $role = role::findOrFail($id);
        //  dd($role);
        $permesstions = $role->permessions()->get();
        // dd($permesstions);
        return view('roles.editrRole', compact('permesstions','role'));
    }


    public function destroy(int $id)
    {
        $role = role::find($id);
        $role->permessions()->detach();
        // dump($role);
        // dd($role->permessions());
        $role->delete();
        return redirect()->route('role.index');
    }

    public function index()
    {
        $roles = role::all();

        return View('roles.index', compact('roles'));
    }


    public function store(Rolerequest $request)
    {

        $request->validated();
        // dd($request);

        $role = role::create([
            'name' => $request->name,
        ]);
        // dd($request->permission_id);
        $role->permessions()->attach($request->permission_id);

        // role::create($request->all());z
        return redirect()->route('role.index');
    }
}
