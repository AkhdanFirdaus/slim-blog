<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
    	$posts = Post::where('created_at', '<=', Carbon::now())
	    	->orderBy('created_at', 'desc')
	    	->paginate(config('blog.posts_per_page'));

	    return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstorFail();

    	return view('blog.post')->withPost($post);
    }
}
