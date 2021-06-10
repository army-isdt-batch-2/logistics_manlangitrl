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
        // dd( $assets);
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
        $asset=Asset::find($this->request->asset_id);
        if($asset->total_stocks >= $this->request->quantity){

            $data= Distribution::create(
                $this->request->except('_token')
            );
            
            if($data->status=='distributed'){
                $total_stock= $asset->total_stocks - $data->quantity;
                $asset->update(['total_stocks' =>  $total_stock]);

            }


            return Redirect::route('distribution.index')->with('success','Asset successfully distributed.');

        }
        else{

            return Redirect::route('distribution.index')->with('error','Asset out of stocks !.');

        }
        
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
         $asset=Asset::find($this->request->asset_id);
         if($asset->total_stocks >= $this->request->quantity){
             
         $data=Distribution::find($id)->update(
            $this->request->except('_token')
       );
       $data1=Distribution::find($id);
       if($data1->status=='distributed'){ 
        $total_stock= $asset->total_stocks - $data1->quantity;
        $asset->update(['total_stocks' =>  $total_stock]);

       }
      
       


       return Redirect::route('distribution.index')->with('success','Asset successfully distributed.');

      }else{

        return Redirect::route('distribution.index')->with('error','Asset out of stocks !.');

    }
     
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
