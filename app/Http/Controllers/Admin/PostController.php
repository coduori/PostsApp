<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();;
        return view('home')->with("posts",$posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $post =  Post::create([
            'user_id'    =>  $id,
            'title'      =>  $request->post_title,
            'post'       =>  $request->post_message,
        ]);
        if(!$post){
            Session::flash('post_create_fail', "Unable to create the post on the database!");
        }
        $session = Session::flash('post_create_success', "Your post has been created!");
        return redirect()->to('home')->with('session',$session);       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where(["id"=>$id])->get();
        return view('Admin.editPost')->with('post',$post[0]);
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
        $response = Post::where('id',$id)->update([
            "title" => $request->title,
            "post" => $request->message,
        ]);
        if(!$response){
            Session::flash('post_update_fail', "Unable to update the post!");
        }
        $session = Session::flash('post_update_success', "Post updated successfully!");
        return redirect()->to('home')->with('session',$session);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $response = Post::where(["id"=>$id])->delete();
        if(!$response){
            Session::flash('post_delete_fail', "Unable to update the post!");
        }
        $session = Session::flash('delete_post_success', "Post deleted!");
        return redirect()->to('home')->with('session',$session);   

    }
}
