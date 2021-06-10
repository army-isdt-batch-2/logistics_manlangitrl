<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect,Storage;
class UserController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 
    public function index()
    {
        $data=User::get();
        return view('users.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $file_name=Storage::disk('public')->putFile('avatar',$this->request->file);
        $this->request->merge([
            'avatar'=> $file_name,
            'password'=>bcrypt($this->request->password)
        ]);

     User::create(
        $this->request->except('file','_token')
    );
    return Redirect::route('users.index');
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
       $data=User::find($id);
       return view('users.edit')->with(['data'=>$data]);
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
        if($this->request->has('file')){
            $avatarname=Storage::disk('public')->putFile('avatar',$this->request->file);

            $this->request->merge([
                'avatar'=>   $avatarname,
               
            ]);
        }
        if($this->request->has('password')){
        $this->request->merge([
            'password'=>bcrypt($this->request->password)
        ]);
        }


     User::find($id)->update(
        $this->request->except('_token')
    );
    return Redirect::route('users.index')->with('success','User successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return Redirect::route('users.index')->with('error','User successfully deleted.');
    }
}
