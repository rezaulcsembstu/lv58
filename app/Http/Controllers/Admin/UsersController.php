<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests\UserEditFormRequest;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('backend.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $user = User::whereId($user->id)->firstOrFail();
        return view('backend.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $roles = Role::pluck('name', 'id');
        $selectedRoles = $user->roles()->pluck('id');
        //return [$selectedRoles, $roles];

        return view('backend.users.edit')->with([
            'user' => $user,
            'roles' => $roles,
            'selectedRoles' => $selectedRoles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserEditFormRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditFormRequest $request, User $user)
    {
        //
        $user->name =$request->get('name');
        $user->email =$request->get('email');
        $password =$request->get('password');
        if ($password != '') {
            $user->password = Hash::make('password');
        }
        $user->save();

        $user->syncRoles($request->get('role'));

        return redirect( action('Admin\UsersController@edit', $user) )->with('status', 'The user has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
