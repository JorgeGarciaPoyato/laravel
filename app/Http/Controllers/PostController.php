<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Grade;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {

        //Auth::checkAuth("Admin");

        $posts =  Post::all();        
        return view("posts/index",compact("posts"));

    }
     public function postsAdmin()
    {
        
        //Auth::checkAuth("Admin");
        //if (Auth::user()->role_id == "1" || Auth::user()->role_id == "2") {
        //if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $titulo='post';
        $posts = Post::all();     
        return view("posts.todopost", compact('posts','titulo'));
      //  }else {
      //      return view('about.index');
      //  }
        
       // }
        //else
        //{
         //  return view('welcome');
        //}


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $titulo='post';
        $categories= Category::all();
        $grades= Grade::all();
        return view("posts.crearpost", compact('categories','grades','titulo'));
       // }else {
      //      return view('about.index');
      //  }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //  if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $post = new Post($request->all());
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route('todos');
     //   }else {
       //     return view('about.index');
       //// }
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.post", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     //   if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
         $post= Post::find($id);
        $titulo='post';
        $categories= Category::all();
        $grades= Grade::all();
        return view("posts.edit", compact('post','categories','grades','titulo'));
      //  }else {
      //      return view('about.index');
       // }
       
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
    //    if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $post = Post::find($id);
        $post->update($request->all());
        $post->save();
        return redirect()->route('todos');
      //  }else {
       //     return view('about.index');
      //  }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //  if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $post = Post::find($id);
         $post->delete();
        return redirect()->route('todos');
     //   }else {
       //     return view('about.index');
       // }
     
    }
}
