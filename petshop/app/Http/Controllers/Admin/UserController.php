<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Role; 
use DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.pages.user.index', compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $roles = Role::all();
            return view('admin.pages.user.add', compact('roles')); 
        }
        
        $user = User::create([
            'surname' => $request->LastName,
            'name' => $request->FirstName,
            'phone' => $request->PhoneNumber,
            'email' => $request->Email,
            'password' => bcrypt($request->Password),
            
        ]);
        // C1:
        $user->roles()->attach($request->role_id);
        // C2:
        // $roleIds = $request->role_id;
        // foreach($roleIds as $roleItem){
        //     DB::table('role_user')->insert([
        //         'role_id' => $roleItem,
        //         'user_id' => $user->id
        //     ]);
        // }
        
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        if ($request->getMethod() == 'GET') {
        
            return view('admin.pages.user.edit'); 
        }
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
