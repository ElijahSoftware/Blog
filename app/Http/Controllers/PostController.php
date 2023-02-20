<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function opbouwen()
    {
        $this->middleware('auth')->except(['index', 'zien']);
    }
    public function index()
    {

        $maak = Post::latest()->get();
        return view('les2/blogpost/post', compact('maak'));
    }
    public function maken()
    {

        return view('les2/blogpost/maken');
    }
    public function opslaan()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post();
        $id= new User();
        $post->title = request('title');
        $post->body = request('body');
        
        $post->user_id = request()->user->id;
        $post->save();

        return redirect('post');
    }

    public function zien(Post $kijk)
    {

        return view('les2/blogpost/postZien', compact('kijk'));
    }
}
