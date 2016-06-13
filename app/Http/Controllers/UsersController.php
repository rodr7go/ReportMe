<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Building;
use App\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $buildings = Building::lists('name', 'id');
        $roles = Role::lists('name', 'id');

        return view('users.create', compact('roles' ,'buildings', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Users\CreateUserRequest $request)
    {
        $user  = User::create( $request->all() );
        $user->password = bcrypt($user->password);
        $user->update();
        $user->buildings()->attach($request->get('building_id'));
        $user->roles()->attach($request->get('role_id'));

        return redirect()->route('users.index');

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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $buildings = Building::lists('name', 'id');
        $roles = Role::lists('name', 'id');

        return view('users.edit', compact('user', 'buildings', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Users\EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->has('password'))
        {
            $user->update($request->all());
            $user->password = bcrypt($user->password);
            $user->update();
        }
        else
        {
            $user->update($request->except('password'));
        }
        
        
        $user->buildings()->sync([$request->get('building_id')]);
        $user->roles()->sync([$request->get('role_id')]);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index');
    }
}
