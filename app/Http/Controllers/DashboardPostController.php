<?php

namespace App\Http\Controllers;

use App\Models\adminposts;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.posts.index', [
        //     'posts' => Post::all()
        // ]);
        // return Post::all();
        return view('dashboard.posts.index',[
           'posts' => Post::where('user_id', auth()->user()->id)->paginate(4)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            // 'categories' => Post::all()
             Post::where('user_id', auth()->user()->id)->get()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'image' => 'image|file|max:2048|mimes:jpeg,png,jpg',
            'body' => 'required'
        ]);
        // jika mengupload gambar lakukan ini // jika ada gambar yg di upload
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
            // cara bacanya => kalau request dari file yang namanya image itu ada isinya (kalau kosong null kalau null berarti false) , kalau true
            // $validatedData diisi dengan image, di isi dengan upload gambar nya sekaligus ambil nama gambar nya
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200) ; //buat batasan kalimat excerpt nya // dan gunanya strip_tags adalah supaya menghilangkan tag html nya

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('succes', 'successfully added data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'post' => $post,
            Post::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'judul' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'body' => 'required'
        ]; // jika tidak ingin mengubah slug nya ... karna kalau masih ada uniqe atau belum lakukan seperti ini maka tidak akan bisa di edit karna slug nya tidak kita ubah karna dia unique...

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage); // ini untuk menghapus image lama
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
            // cara bacanya => kalau request dari file yang namanya image itu ada isinya (kalau kosong null kalau null berarti false) , kalau true
            // $validatedData diisi dengan image, di isi dengan upload gambar nya sekali gus ambil nama gambar nya
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100) ; //buat batasan kalimat excerpt nya // dan gunanya strip_tags adalah supaya menghulangkan tag html nya

        Post::where('id', $post->id)
        ->update($validatedData);

        return redirect('/dashboard/posts')->with('succes', 'successfully Update data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image); // ini untuk menghapus image lama
        } // delete file gambar

        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('succes', 'successfully Delete data');
    }
}
