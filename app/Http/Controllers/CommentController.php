<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Session;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'comment'  => 'required|min:10|max:2000'
            ]);
        }
        else{
            $this->validate($request, [
                'name' => 'required|max:255',
                'email'  => 'required|email|max:255',
                'comment'  => 'required|min:10|max:2000'
            ]);
        }

        $post = Post::whereSlug($slug)->firstorFail();

        $comment = new Comment();

        if (Auth::check()) {
            $comment->name = $request->user()->name;
            $comment->email = $request->user()->email;
        }
        else{
            $comment->name = $request->name;
            $comment->email = $request->email;
        }
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post_id = $post->id;
        // $comment->post()->associate($post);

        $comment->save();

        Session::flash('success', 'Comment was added');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();

        Session::flash('succes', 'Komentar telah dihapus');

        return redirect()->back();
    }
}
