<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
    	$books = \App\Book::orderBy('book_name', 'ASC')->paginate(10);

    	return view('admin.book.index', compact('books'));
    }
}
