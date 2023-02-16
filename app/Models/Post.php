<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    protected $table = 'posts';

    public function comments(){
        return $this->hasMany(comment::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function commentoevogen($body, $post_id){
        // $this->comments()->create(compact('body', 'post_id'));
        $comment = new Comment();
        $comment->body = $body;
        $comment->post_id = $post_id;
        $comment->save();
        // dd($comment);
    }
}