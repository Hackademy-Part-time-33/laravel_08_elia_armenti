<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
/* use Illuminate\Http\Request; */
use App\Models\Author;
use App\Models\Book;

class Bookcontroller extends Controller
{

    public function __construct()
    {
        return [
            'auth'
        ];
    }

    public function show(Book $book) {
        return view ('books.show', compact('book'));
        
    }

    public function index() {
        $books = Book::all();
        return view ('books.index', compact('books'));
    }

    public function create() {
        
        $authors = Author::all(); 
        return view ('books.create', compact('authors'));
    }

    public function store(BookCreateRequest $request) {
        
        

        if ($request->hasFile(('image'))) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public\images', $file_name);
        }
       /*  dd($image_extension, $image_name); */

        Book::create([
            'title'=>$request->title,
            'year'=>$request->year,
            'pages'=>$request->pages,
            'image'=>$path_image,
            'author_id'=>$request->author_id,
        ]);
        session()->flash('success', 'Libro creato con successo');
        return redirect()->route('book.index');
    }


}
