<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    //
    public function index(){
        return view('library');
    }

    public function update(){
        return view('updateLibrary');
    }
}
