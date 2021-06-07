<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Distribution;
use Redirect;
class DistributionController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Distribution::with('asset')->get();
        return view('distribution.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets=Asset::select('name','id')->get();

       return view('distribution.create')->with(['assets'=>$assets]);
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
        Distribution::create(
            $this->request->except('_token')
        );
     return Redirect::route('distribution.index')->with('success','Asset successfully distributed.');
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
        $data=Distribution::find($id);
        return view('distribution.edit')->with(['data'=>$data,'assets'=>$assets]);
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
         //    dd($this->request->all());
         Distribution::find($id)->update(
            $this->request->except('_token')
       );
     return Redirect::route('distribution.index')->with('success','Asset successfully distributed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Distribution::find($id)->delete();
        return Redirect::route('distribution.index')->with('error','Distribution successfully deleted.');
    }
}
