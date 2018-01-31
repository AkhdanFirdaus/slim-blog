<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Auth;
use Image;

class AlbumsController extends Controller
{
    public function gallery()
    {
      $albums = Album::with('Photos')->get();
      return view('photoshow.gallery', ['user' => Auth::user()])->with('albums', $albums);
    }

    public function create()
    {
      return view('photoshow.create', ['user' => Auth::user()]);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'cover_image' => 'image|max:1999'
      ]);

      $foto = $request->file('cover_image');
      $filename = time() . '.' . $foto->getClientOriginalExtension();
      Image::make($foto)->fit(250, 200)->save( public_path('/uploads/album_covers/' . $filename) );

      $album = new Album;
      $album->name = $request->input('name');
      $album->description = $request->input('description');
      $album->cover_image = $filename;

      $album->save();

      return redirect('/gallery')->with('success', 'Album Created');
    }

    public function show($id)
    {
      $album = Album::with('Photos')->find($id);

      return view('photoshow.photos.showalbum', ['user' => Auth::user()])->with('album', $album);
    }
}
