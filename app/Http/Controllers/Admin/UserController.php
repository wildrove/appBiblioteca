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
}
