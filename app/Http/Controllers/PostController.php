<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $data = [
            "posts" => $posts
        ];
        return view('dashboard.table', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $data = [
            "posts" => $posts
        ];
        return view('dashboard.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $rules = [
            "title" => "required",
            "description" => "required",
            "image" => "image",

        ];
        $data = $this->validate($request, $rules);
        $image = $request->file('image');
        //storing original size the usual way
        $files[0] = $image->store("uploads");

        //giving a unique file name to the thumbnail

        $filename =str_random(30). '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());

        $img->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->save('uploads/' . $filename);
        $files[1] = 'uploads/' . $filename;

        $data["image"] = $files;
        Post::create($data);

        return Response::redirectTo("/dashboard/posts");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = [
            "post" => $post
        ];

        return view('dashboard.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            "title" => "required",
            "description" => "required",
        ];
        $data = $this->validate($request, $rules);
        $post->update($data);
        return Response::redirectTo("/dashboard/posts");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->delete();
        return Response::redirectTo("/dashboard/posts");
    }
}
