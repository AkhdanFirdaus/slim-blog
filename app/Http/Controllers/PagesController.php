<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use File;

class PagesController extends Controller
{
  public function beranda()
  {
    return view('home', ['user' => Auth::user()]);
  }

  public function profile()
  {
    return view('auth.profile', ['user' => Auth::user()]);
  }

  public function updateAvatar(Request $request)
  {
    $user = Auth::user();
    if ($request->hasFile('avatar')) {
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();

      if ($user->avatar !== 'default.jpg') {
                $file = public_path('uploads/avatars/' . $user->avatar);

                if (File::exists($file)) {
                    unlink($file);
                }
            }

      Image::make($avatar)->fit(200, 200)->save( public_path('/uploads/avatars/' . $filename) );

      $user->avatar = $filename;
      $user->save();
    }
    return redirect('/profile');
  }

  public function updateName(Request $request, $id)
  {
    $name = ['name' => $request->name];

    User::where('id', $id)->update($name);
    return redirect('/profile');
  }
}
