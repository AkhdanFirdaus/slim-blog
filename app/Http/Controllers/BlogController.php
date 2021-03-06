<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Auth;
use Image;
use File;
use Session;

class BlogController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth')->except(['blogIndex', 'showPost', 'search']);
    // }
    public function blogIndex()
    {
    	$posts = Post::where('created_at', '<=', Carbon::now())
	    	->orderBy('created_at', 'desc')
	    	->paginate(6);

	    return view('blog.blogIndex', ['user' => Auth::user()])->with('posts', $posts);
    }

    public function showPost($slug)
    {
    	$post = Post::whereSlug($slug)->firstorFail();

        // // Post Acak
        $prs = Post::inRandomOrder()
          ->paginate(3);

    	return view('blog.post', ['user' => Auth::user()])->withPost($post)->withPrs($prs);
    }

    public function search(Request $request)
    {
        $search = $request->searchData;
        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->paginate(5);
        return view('blog.blogIndex', ['msg' => 'Hasil Pencarian: '.$search], ['user' => Auth::user()])->with('posts', $posts);
    }

    // Diproteksi ==============================================
    public function ngepost()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');

        return view('blog.post-add', ['user' => Auth::user()])->withCategories($categories)->withTags($tags);
    }

    public function posting(Request $request)
    {
        $this->validate($request, [
            'Judul' => 'required|max:255',
            'Konten' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('Judul');
        $post->content = $request->input('Konten');

        if ($request->hasFile('post_image'))
        {
            $foto = $request->file('post_image');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/posts/post_cover/' . $filename) );

            $post->post_image = $filename;
        }

        $post->author_id  = $request->user()->id;
        $post->category_id = $request->input('category_id');

        $post->save();

        $post->tags()->sync($request->tags, false);

        Session::flash('success', 'Postingan terkirim');

        return redirect('')->route('post.show', $post->slug);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');

        return view('blog.post-edit', ['user' => Auth::user()])->withPost($post)->withCategories($categories)->withTags($tags);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Judul' => 'required|max:255',
            'Konten' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->input('Judul');
        $post->content = $request->input('Konten');

        if ($request->hasFile('post_image'))
        {
            $foto = $request->file('post_image');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            Image::make($foto)->save( public_path('/posts/post_cover/' . $filename) );

            $post->post_image = $filename;
        }

        $post->author_id  = $request->user()->id;
        $post->category_id = $request->input('category_id');

        $post->save();

        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }
        else{
            $post->tags()->sync([]);
        }

        Session::flash('success', 'Post Telah di Ubah');

        return redirect()->route('post.show', $post->slug);
    }

    public function hapus($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete($id);

        if ($post->post_image !== 'default.png') {
            $file = public_path('posts/post_cover/' . $post->post_image);

            if (File::exists($file)) {
                unlink($file);
            }
        }

        Session::flash('danger', 'Pesan Telah di hapus');

        return redirect('/post');
    }
}
