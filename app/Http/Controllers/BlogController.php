<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Image;

class BlogController extends Controller
{
    public function blogIndex()
    {
    	$posts = Post::where('created_at', '<=', Carbon::now())
	    	->orderBy('created_at', 'desc')
	    	->paginate(4);

	    return view('blog.blogIndex')->with('posts', $posts);
    }

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstorFail();

    	return view('blog.post')->withPost($post);
    }

    public function posting(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('Judul');
        $post->content = $request->input('Konten');
        $post->author = $request->user()->name;

        $foto = $request->file('post_image');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        Image::make($foto)->fit(400, 300)->save( public_path('/posts/post_cover/' . $filename) );

        $post->post_image = $filename;

        $post->save();

        return redirect('/blog')->with('success', 'Postingan terkirim');
    }

    public function search(Request $request)
    {
        $search = $request->searchData;
        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->paginate(5);
        return view('blog.blogIndex', ['msg' => 'Hasil Pencarian: '.$search])->with('posts', $posts);
    }
}
