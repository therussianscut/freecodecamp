<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller



{


// this function makes sure we cannot see create posts page if we are not logged in.
    public function __construct() {



        $this->middleware('auth');




    }


    public function create() {



    return view('posts.create');

    }




    public function store() {


        $data= request()->validate([

            'another' => '',
            'caption' => 'required',
            'image' => ['required', 'image'],




        ]);

        $imagePath=(request('image')->store('uploads', 'public'));



        auth()->user()->posts()->create([


            'caption' => $data['caption'],
            'image' => $imagePath,


        ]);

        return redirect('profile/'.auth()->user()->id);



    }



}
