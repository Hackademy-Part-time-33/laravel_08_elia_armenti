<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(Book $book) 
    {

        return view ('authors.show', compact('book'));
        
        
        
    }
}
