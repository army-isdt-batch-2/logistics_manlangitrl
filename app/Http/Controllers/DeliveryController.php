<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;
use App\Models\Delivery;
use App\Models\Transportation;
use Redirect;
class DeliveryController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Delivery::with(['distribution','transportation'])->get();
        return view('delivery.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distributions=Distribution::select('id','requestor_name')->get();
        $transportations=Transportation::select('id','driver_name')->get();
       return view ('delivery.create')->with(['distributions'=>$distributions,'transportations'=>$transportations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
            //  dd($this->request->all());
          Delivery::create(
            $this->request->except('_token')
        );
     return Redirect::route('delivery.index')->with('success','Delivery successfully added.');
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
        $distributions=Distribution::select('id','requestor_name')->get();
        $transportations=Transportation::select('id','driver_name')->get();
        $data=Delivery::find($id);
       return view ('delivery.edit')->with(['data'=> $data,'distributions'=>$distributions,'transportations'=>$transportations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        Delivery::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('delivery.index')->with('success','Delivery successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Delivery::find($id)->delete();
        return Redirect::route('delivery.index')->with('error','Delivery successfully deleted.');
    }
}
