<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;
use App\Models\Asset;
use Redirect;
class ReturnController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Returns::with('asset')->get();
        return view('return.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets=Asset::select('name','id')->get();
        return view('return.create')->with(['assets'=>$assets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //    dd($this->request->all());
        Returns::create(
            $this->request->except('_token')
        );
     return Redirect::route('return.index')->with('success','Asset successfully return.');
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
        $assets=Asset::select('name','id')->get();
        $data=Returns::find($id);
        return view('return.edit')->with(['data'=>$data,'assets'=>$assets]);
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
        Returns::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('return.index')->with('success','Asset successfully returned.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Returns::find($id)->delete();
        return Redirect::route('return.index')->with('error','Return successfully deleted.');
   
    }
}
