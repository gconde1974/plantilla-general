<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $posts = Post::all();
        /*
        foreach ($post as $key => $value) {
            echo $value->tituloSEO.'<br>';
        }
        */
        //var_dump($post);
        return view('welcome',compact('posts'));
    }

    public function beachresorts($beachresort){
        return "Beach Resort: ".$beachresort;
    }

    public function secciongeneral(){
        return view('secciongeneral');
    }


}
