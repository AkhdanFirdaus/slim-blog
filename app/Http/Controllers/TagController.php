<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Auth;
use Session;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::withCount('posts')->get();

        return view('blog.blogTag.tagIndex', ['user' => Auth::user()])->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

        Session::flash('success', 'Tag baru telah ditambahkan');

        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Tag::whereSlug($slug)->firstorFail();

        return view('blog.blogTag.tagShow', ['user' => Auth::user()])->withTag($tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $tag = Tag::whereSlug($slug)->firstorFail();

        return view('blog.blogTag.tagEdit', ['user' => Auth::user()])->withTag($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $tag = Tag::whereSlug($slug)->firstorFail();

        $this->validate($request, ['name' => 'required|max:255']);

        $tag->name = $request->name;
        $tag->save();

        Session::flash('success', 'Tag telah diedit');

        return redirect()->route('tags.show', $tag->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $tag = Tag::whereSlug($slug)->firstorFail();
        $tag->posts()->detach();

        $tag->delete();

        Session::flash('success', 'Tag telah sukses dihapus');

        return redirect()->route('tags.index');
    }
}
