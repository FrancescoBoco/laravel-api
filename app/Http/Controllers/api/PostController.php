<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models 
use App\Models\Post;

// Request 
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        
        return response()->json([
            'success'=> true,
            'posts'=> $post,
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
    //     $formDate = $request->validate();

    //     $post = Post::create([
    //         'title' => $formDate['title'],
    //         'slug' => str()->slug($formDate['title']), 
    //         'content' => $formDate['content'],
    //     ]);
    //     return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        if($post){
            return  response()->json([
                'success'=> true,
                'posts'=> $post
            ]);
        }
        else{
            return  response()->json([
                'success'=> false,
                'message'=> 'Page not found'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // $formDate = $request->validated();

        // $post->update([
        //     'title' => $formDate['title'],
        //     'slug' => str()->slug($formDate['title']), 
        //     'content' => $formDate['content'],
        // ]);
        // return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // $post->delete();
        
        // return redirect()->route('admin.posts.index');
    }
}
