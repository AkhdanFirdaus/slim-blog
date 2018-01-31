<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Auth;
use Image;

class PhotosController extends Controller
{
    public function create($album_id)
    {
      return view('photoshow.photos.create', ['user' => Auth::user()])->with('album_id', $album_id);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        'cover_image' => 'image|max:1999'
      ]);

      $foto = $request->file('photo');
      $filename = time() . '.' . $foto->getClientOriginalExtension();
      Image::make($foto)->fit(250, 200)->save( public_path('/uploads/photos/'. $filename) );

      $photo = new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->title = $request->input('title');
      $photo->description = $request->input('description');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filename;

      $photo->save();

      return redirect('/gallery'.'/'. $request->input('album_id'))->with('success', 'Photo Uploaded');
    }

    // public function show($id)
    // {
    //   $photo = Photo::find($id);
    //
    //   return view('photoshow.photos.showphoto', ['user' => Auth::user()])->with('photo', $photo);
    // }
}
