<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Categories;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $post_data = Post::get();
        return view('post_management',compact('post_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Categories::get();
        
        return view('post_create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        $valid_data=$request->validated();
        Post::create($valid_data);
        
        return redirect()->back()->with('success', 'Post created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $post= Post::find($id);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::find($id);
        $categories= Categories::get();
        return view('edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $valid_data= $request->validated();
        $post = Post::findOrFail($id); 
        $post->update($valid_data);

        return redirect()->route('posts.show',$id)->with('success', 'Post created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $post = Post::findOrFail($id);
         $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
