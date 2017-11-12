<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#we can put use Hash;  as a name space and we can delele the backslash in the return \Hash

class BookController extends Controller
{
    //

    public function index()
    {
        $jsonPath = database_path('books.json');
        $booksJson = file_get_contents($jsonPath);
        $books = json_decode($booksJson, true);

        return view('book.index')->with([
            'books' => $books,

        ]);

    }



    public function show($title = null)
    {
        dump($title);
        return view('book.show')->with([
            'title'=> $title,
        ]);

    }

    public function examples ()
    {
        return \Hash::make('topsecret');

    }






}
