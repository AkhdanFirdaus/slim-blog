<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Carbon\Carbon;
use Auth;
use Image;
use File;

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

    return view('home', ['user' => Auth::user()])->with('posts', $posts);
  }

  public function profile()
  {
    return view('auth.author.profile', ['user' => Auth::user()]);
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
    return redirect('/profile');
  }

  public function updateProfile(Request $request, $id)
  {
    
  }
}
