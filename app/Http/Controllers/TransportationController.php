<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use Redirect;
class TransportationController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Transportation::get();
        return view('transportation.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($this->request->all());
        Transportation::create(
          $this->request->except('_token')
      );
      return Redirect::route('transportation.index')->with('success','Transportation successfully added.');
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
        
        $data=Transportation::find($id);
        return view('transportation.edit')->with(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Transportation::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('transportation.index')->with('success','Transportation successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transportation::find($id)->delete();
        return Redirect::route('transportation.index')->with('error','Transportation successfully deleted.');
    }
}
