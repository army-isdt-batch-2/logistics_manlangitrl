<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Redirect;
class SupplierController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   } 

    public function index()
    {
       $data=Supplier::get();
        return view('supplier.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd($this->request->all());
        Supplier::create(
                $this->request->except('_token')
            );
         return Redirect::route('supplier.index')->with('success','Supplier successfully added.');
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
        $data=Supplier::find($id);
        return view('supplier.edit')->with(['data'=>$data]);
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
        Supplier::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('supplier.index')->with('success','Supplier successfully updated.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return Redirect::route('supplier.index')->with('error','Supplier successfully deleted.');
   
        
    }
}
