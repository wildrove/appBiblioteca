<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = \App\User::orderBy('first_name', 'ASC')->paginate(10);

    	return view('admin.user.index', compact('users'));
    }


    public function create()
    {
    	return view('admin.user.create');
    }


    public function store(Request $request)
    {
    	$users = $request->all();
    	$users['password'] = \Hash::make($users['password']);

    	$user = \App\User::create($users);

        flash('Usuário criado com sucesso !')->success();

    	return redirect()->route('admin.users.index');
    }


    public function edit($user)
    {
        $user = \App\User::find($user);

        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, $user)
    {
       $user = \App\User::find($user);
       $user->update($request->all());

        flash('Usuário atualizado com sucesso !')->success();

        return redirect()->route('admin.users.index');
    }

    public function destroy($user)
    {
        $user = \App\User::find($user);

        $user->delete();

        flash('Usuário removido com sucesso !')->success();

        return redirect()->route('admin.users.index');
    }


}
