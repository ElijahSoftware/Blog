<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistratieController extends Controller
{
    public function maken(){

        return view('les2/register');
    }

    public function opslaan() {

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create(request(['name','email','password']));


        auth()->login($user);


        return redirect('/post');
    }
}
