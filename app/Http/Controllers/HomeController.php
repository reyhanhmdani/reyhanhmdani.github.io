<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mainpage',[
            "title" => 'PonpesAinulYakin',
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            // ngirimin data title dari halamannya
          "title" => "Single Post",
          "active" => 'posts',
          "post" => $post,


      ]);
    }
}
