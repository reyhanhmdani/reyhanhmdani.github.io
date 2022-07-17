<?php

namespace App\Http\Controllers;


use App\Models\adminposts;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminposts  $adminposts
     * @return \Illuminate\Http\Response
     */
    public function show(adminposts $adminposts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminposts  $adminposts
     * @return \Illuminate\Http\Response
     */
    public function edit(adminposts $adminposts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminposts  $adminposts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminposts $adminposts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminposts  $adminposts
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminposts $adminposts)
    {
        //
    }
}
