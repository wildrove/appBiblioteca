<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
            $books = $this->book->orderBy('book_name', 'ASC')->paginate(10);

            foreach ($books as $book ) {
                if($book->book_image == 'noimage.png'){
                    $book->book_image = 'defaultimage.jpg';
                }
            }

            return view('admin.book.index', compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // Handle File Upload
        if($request->hasFile('book_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('book_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('book_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('book_image')->storeAs('books', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        //save in database
        $itens = $this->book->create([
            'book_name' => mb_strtolower($request->book_name),
            'author_name' => mb_strtolower($request->author_name),
            'publishing_name' => mb_strtolower($request->publishing_name),
            'description' => $request->description,
            'release_date' => $request->release_date,
            'category' => mb_strtolower($request->category),
            'book_image' => $fileNameToStore
        ]);

        flash('Livro criado com sucesso !')->success();

        return redirect()->route('admin.books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $book
     * @return \Illuminate\Http\Response
     */

    public function show($book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $book
     * @return \Illuminate\Http\Response
     */

    public function edit($book)
    {
        $book = $this->book->findOrFail($book);

        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $book)
    {
        $book = $this->book->findOrFail($book);

        // Handle File Upload
        if($request->hasFile('book_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('book_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('book_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('book_image')->storeAs('books', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        //save in database
        $book->update([
            'book_name' => mb_strtolower($request->book_name),
            'author_name' => mb_strtolower($request->author_name),
            'publishing_name' => mb_strtolower($request->publishing_name),
            'description' => $request->description,
            'release_date' => $request->release_date,
            'category' => mb_strtolower($request->category),
            'book_image' => $fileNameToStore
        ]);


        flash('Livro atualizado com sucesso !')->success();

        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($book)
    {
        $book = $this->book->findOrFail($book);

        $book->delete();

        flash('Livro removido com sucesso !')->success();

        return redirect()->route('admin.books.index');
    }
}
