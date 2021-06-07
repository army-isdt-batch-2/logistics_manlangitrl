<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Storage;
use App\Models\Supplier;
use Redirect;
class AssetController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Asset::with(['supplier','storage'])->get();

        return view('asset.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers=Supplier::select('id','name')->get();
        $storage=Storage::select('id','name')->get();

        return view('asset.create')->with(['suppliers'=>$suppliers,'storage'=>$storage]);

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
           Asset::create(
            $this->request->except('_token')
        );
     return Redirect::route('asset.index')->with('success','Asset successfully added.');
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
        $suppliers=Supplier::select('id','name')->get();
        $storage=Storage::select('id','name')->get();
        $data=Asset::find($id);
        return view('asset.edit')->with(['data'=>$data,'suppliers'=>$suppliers,'storage'=>$storage]);
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
        Asset::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('asset.index')->with('success','Asset successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asset::find($id)->delete();
        return Redirect::route('asset.index')->with('error','Asset successfully deleted.');
    }
}
