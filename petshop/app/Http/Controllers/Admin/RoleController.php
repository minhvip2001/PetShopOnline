<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role; 
use App\Models\Permission; 

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.pages.role.index', compact('roles')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $permissionParent = Permission::whereNull('parent_id')->get();
            return view('admin.pages.role.add', compact('permissionParent')); 
        }
        
        $role = Role::create([
            'name' => $request->role_name,
            'display_name' => $request->role_description
        ]);
        $role->permissions()->attach($request->permission_id);
        $message = $role->name;
        session()->put('success', $message);
        return response()->json(['role_slug' => $role->id]);

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
        $permissionParent = Permission::whereNull('parent_id')->get();
        $role = Role::find($id);
        
        $permissionChecked = $role->permissions;
        return view('admin.pages.role.edit', compact('permissionParent', 'role', 'permissionChecked')); 
        } 
        $role = Role::find($id);
       
        $role->update([
            'name'=> $request->role_name,
            'display_name' => $request->role_description
        ]);
        $role->permissions()->sync($request->permission_id);
        
        $message = $role->name;
        session()->put('success', $message);
        return response()->json(['role_slug' => $role->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
