<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessiesController extends Controller
{
    public function maken () {

        return view('les2/login');

    }


    public function kapot () {

        auth()->logout();


        return redirect('les2/blogPost/post');
    }
}
