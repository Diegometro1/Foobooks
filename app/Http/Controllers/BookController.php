<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#we can put use Hash;  as a name space and we can delele the backslash in the return \Hash

class BookController extends Controller
{
    //

    public function index()
    {

        return 'Show all the books';

    }

    public function show($title)
    {

        return 'You\'re viewing' . $title;

    }

    public function examples ()
    {
        return \Hash::make('topsecret');

    }






}
