<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {

        $users = $this->user->orderBy('first_name', 'ASC')->paginate(10);

    	return view('admin.user.index', compact('users'));
    }


    public function create()
    {
    	return view('admin.user.create');
    }

    public function show()
    {

    }

    public function store(Request $request)
    {


        $this->validate($request, [

            'user_name' => 'required|unique:users|max:8',
        ]);

    	$users = $request->all();
    	$users['password'] = \Hash::make($users['password']);

    	$user = $this->user->create($users);

        flash('Usuário criado com sucesso !')->success();

    	return redirect()->route('admin.users.index');
    }

    public function edit($user)
    {
        $user = $this->user->findOrFail($user);

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user)
    {
       $user = $this->user->findOrFail($user);
       $user->update($request->all());

        flash('Usuário atualizado com sucesso !')->success();

        return redirect()->route('admin.users.index');
    }

    public function destroy($user)
    {
        $user = $this->user->findOrFail($user);

        $user->delete();

        flash('Usuário removido com sucesso !')->success();

        return redirect()->route('admin.users.index');
    }


}
