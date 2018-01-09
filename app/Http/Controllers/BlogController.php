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

	    return view('blog.index')->with('posts', $posts);
    }

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstorFail();

    	return view('blog.post')->withPost($post);
    }    

    public function tulisPost()
    {
        return view('blog.tulis');
    }

    public function posting(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('Judul');
        $post->content = $request->input('Konten');

        $post->save();

        return redirect('/')->with('success', 'Postingan terkirim');
    }    

    public function search(Request $request)
    {
        $search = $request->searchData;
        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->paginate(5);
        return view('blog.index', ['msg' => 'Hasil Pencarian: '.$search])->with('posts', $posts);
    }
}