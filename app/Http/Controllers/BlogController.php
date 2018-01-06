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

    public function lihatPost($id)
    {
        $post = Post::find($id);

        return view('blog.lihat')->with('posts', $post);
    }

    public function tulisPost()
    {
        return view('blog.tulis');
    }

    public function posting(Request $request)
    {
        $this->validate($request, [
            'Judul' => 'required',
            'Konten' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('Judul');
        $post->content = $request->input('Konten');

        $post->save();

        return redirect('/blog')->with('success', 'Postingan terkirim');
    }

    public function mencari(Request $request)
    {
        $data = $request->input('pencarian');

        $posts = DB::table('data')
        ->where('title', 'LIKE', '%' .$data. '%')
        ->orWhere('content', 'LIKE', '%' .$data. '%')->get();

        if(count ($posts) > 0)
        {
            return view('/')->withDetails($base)->withQuery($data);
        }
        else
        {
            return view('/')->withMessage('data tidak ditemukan');
        }
    }
}