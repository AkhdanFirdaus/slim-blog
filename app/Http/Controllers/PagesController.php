<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Album;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Auth;
use Image;
use File;
use Session;

class PagesController extends Controller
{
  public function beranda()
  {
    // // Acak
    // $posts = Post::inRandomOrder()
    //   ->paginate(3);

    // Berdasarkan tanggal
    $posts = Post::where('created_at', '<=', Carbon::now())
      ->orderBy('created_at', 'desc')
      ->paginate(3);

      $albums = Album::inRandomOrder()
        ->paginate(3);

      return view('home', ['user' => Auth::user()])->withPosts($posts)->withAlbums($albums);
  }

  public function profile()
  {
      $ups = User::withCount('posts')->get();
      return view('auth.author.profile', ['user' => Auth::user()])->withUps($ups);
  }

  public function setProfile()
  {
      return view('auth.author.setting', ['user' => Auth::user()]);
  }

  public function updateAvatar(Request $request)
  {
    $user = Auth::user();
    if ($request->hasFile('avatar')) {
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();

      if ($user->avatar !== 'default.jpg') {
                $file = public_path('/authors/avatars/' . $user->avatar);

                if (File::exists($file)) {
                    unlink($file);
                }
            }

      Image::make($avatar)->fit(200, 200)->save( public_path('/authors/avatars/' . $filename) );

      $user->avatar = $filename;
      $user->save();
    }

    Session::flash('success', 'Foto Profil telah diubah');

    return redirect('/profile');
  }

  public function updateProfile(Request $request, $id)
  {
      $user = [
          'job' => $request->input('Job'),
          'quote' => $request->input('Quote'),
          'about' => $request->input('About')
      ];

      Auth::user()->where('id', $id)->update($user);

      Session::flash('success', 'Informasi Akun Telah di Ubah');

      return redirect('/profile');
  }

  public function authorProfile($slug)
  {
  	$user = User::whereSlug($slug)->orderBy('created_at', 'desc')->firstorFail();
    $categories = Category::withCount('posts')->get();
    $tags = Tag::withCount('posts')->get();

  	return view('auth.author.author-profile')->withUser($user)->withCategories($categories)->withTags($tags);
  }
}
