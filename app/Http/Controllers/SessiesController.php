<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessiesController extends Controller
{
    public function maken () {


    }


    public function kapot () {

        auth()->logout();


        return redirect('/post');
    }
}
