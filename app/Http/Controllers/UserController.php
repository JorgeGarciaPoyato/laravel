<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   

    }

    public function todousers()
    {
       // if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $titulo='user';
        $users = User::all();     
        return view("users.todosu", compact('users','titulo'));
       // }else {
     //       return view('about.index');
       // }
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //   if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
         $titulo='user';
        $roles= Role::all();
        return view("users.crearuser", compact('roles','titulo'));
    //    }else {
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
        $user = new User();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('todosu');
       // }else {
      //      return view('about.index');
    //    }
       
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
        //if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $user= User::find($id);
        $titulo='user';

        return view("users.edit", compact('user','titulo'));
       // }else {
       //     return view('about.index');
      //  }
        
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

  //  if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $user = User::find($id);
        $user->update($request->all());
        $user->save();
        return redirect()->route('todosu');
     //   }else {
     //       return view('about.index');
     //   }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     //   if( Auth::user()->roles[0]['name'] == 'Admin' || Auth::user()->roles[0]['name'] == 'Teacher' ){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('todosu');
    //    }else {
     //       return view('about.index');
     //   }
    }

    public function suscribir()
    {
        User::where('id',Auth::id())->update(['status'=>'suscrito']);
        return redirect()->route('posts.index');
    }
}
