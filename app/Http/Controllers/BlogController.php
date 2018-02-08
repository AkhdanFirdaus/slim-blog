<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use Image;
use Auth;
use File;

class BlogController extends Controller
{
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

    	return view('blog.post', ['user' => Auth::user()])->withPost($post);
    }

    public function ngepost()
    {
      return view('blog.post-add', ['user' => Auth::user()]);
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

        return redirect('/post')->with('success', 'Postingan terkirim');
    }

    public function search(Request $request)
    {
        $search = $request->searchData;
        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->paginate(5);
        return view('blog.blogIndex', ['msg' => 'Hasil Pencarian: '.$search])->with('posts', $posts);
    }

    public function hapus($id)
    {
      $post = Post::find($id);
      $post->delete($id);

      if ($post->post_image !== 'default.png') {
          $file = public_path('posts/post_cover/' . $post->post_image);

          if (File::exists($file)) {
              unlink($file);
          }
      }

      return redirect('/post')->with('hapus', 'post telah dihapus');

    }

    public function edit($id)
    {
      $post = Post::find($id);

      return view('blog.post-edit', ['user' => Auth::user()])->withPost($post);
    }

    public function update(Request $request, $id)
    {
      $post = [
        'title' => $request->input('Judul'),
        'content' => $request->input('Konten')
      ];

      Post::where('id', $id)->update($post);

      return redirect('/post')->with('success', 'Pesan Telah di Ubah');
    }
}
