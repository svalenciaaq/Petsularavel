<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $users=User::orderBy('id','DESC')->paginate(3);
        return view('admin.users.index',compact('users')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->user()->authorizeRoles(['admin']);
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        
        $request->user()->authorizeRoles(['admin']);
        $user= User::create($request->all());
        $user->roles()->attach($request->rol_id);
       
        return redirect('admin/users')->with('message' , 'Guardado Satisfactoriamente');
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
    public function edit(Request $request,$id)
    {
        
        $request->user()->authorizeRoles(['admin']);
        $users = User::find($id);
        return view('admin.users.edit',compact('users'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        
        $request->user()->authorizeRoles(['admin']);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email= $request->input('email');
        $user->password = $request->input('password');
    
        $user->roles()->sync(array( $user->id => array( 'role_id' => $request->rol_id)));
        $user->save();

        return redirect('admin/users')
                                        ->with('message' , 'Actualizacion exitosa');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $request->user()->authorizeRoles(['admin']);
       User::find($id)->delete();
        return redirect('admin/users')
                        ->with('success','Item deleted successfully');
    }
}
