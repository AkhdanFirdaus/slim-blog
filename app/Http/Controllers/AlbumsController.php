<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Auth;
use Image;
use File;
use Session;

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
      Image::make($foto)->save( public_path('/uploads/album_covers/' . $filename) );

      $album = new Album;
      $album->name = $request->input('name');
      $album->description = $request->input('description');
      $album->cover_image = $filename;

      $album->save();

      Session::flash('success', 'Album telah dibuat');

      return redirect('/gallery');
    }

    public function show($id)
    {
        $album = Album::with('photos')->find($id);

        return view('photoshow.photos.photo', ['user' => Auth::user()])->with('album', $album);
    }

    public function delAlbum($id)
    {
      $album = Album::find($id);
      $album->delete($id);

      if ($album->cover_image !== 'default.png') {
          $file = public_path('album_covers/' . $album->cover_image);

          if (File::exists($file)) {
              unlink($file);
          }
      }

      Session::flash('success', 'Album berhasil dihapus');

      return redirect('/gallery');
    }
}
