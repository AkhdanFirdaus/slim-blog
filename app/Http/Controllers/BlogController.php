<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::where('created_at', '<=', Carbon::now())
	    	->orderBy('created_at', 'desc')
	    	->paginate(config('blog.index', compact('posts'));

	    return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstorFail();

    	return view('blog.post')->withPost($post);
    }
}
