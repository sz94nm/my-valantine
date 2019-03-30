<?php

namespace App\Http\Controllers;

use App\Option;
use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $option=Option::find(1);
        $data = [
            "posts" => $posts,
            "option"=>$option,
        ];
        return view('site.home', $data);
    }
}
