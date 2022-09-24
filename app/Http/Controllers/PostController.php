<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DeepCopy\Filter\Filter;

class PostController extends Controller
{
    public function index()
    {

        $judul = '';
      return view('mainpage', [
        "title" => "Beranda" . $judul,
        "active" => 'posts',
        "posts" => Post::latest()->paginate(20)
      ]);



    }

    public function show(Post $post)
    {
        return view('post',[
            // ngirimin data title dari halamannya
          "title" => "Single Post",
          "active" => 'posts',
          "post" => $post

      ]);
    }
    // public function blogpage(){
    //     return view('layouts.menu.blog',[
    //         'title' => 'blog',
    //         'active' => 'blog',
    //         "posts" => Post::latest()->paginate(3)
    //     ]);
    // }
}
