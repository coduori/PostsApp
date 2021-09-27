<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        ## return all posts in DB with status code 200
        return  Response::json($posts, 200); 
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
            'title'      =>  $request->title,
            'post'       =>  $request->post,
        ]);
        if(!$post){
            return Response::json(["response"=>"resource could not be created"], 409);  
        }
        return Response::json($post, 200);      
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
        return Response::json($post, 200);
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
            "post" => $request->post,
        ]);
        if(!$response){
            return Response::json(["response"=>"could not update resource"], 409);
        }
        return Response::json(Post::find($id), 200);
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
            return Response::json(["response"=>"resource not found"], 404);
        }
        return Response::json(["response"=>"resource deleted successfully"], 200);

    }
}
