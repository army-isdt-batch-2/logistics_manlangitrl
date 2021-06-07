@extends('layouts.app')
@section('title','Asset')
@section('body')
@php $active = 'asset' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Edit Asset
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('asset.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('asset.update',$data->id)}}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{$data->description}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" value="{{$data->category}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Supplier</label>
                          <select  class="form-control" name="supplier_id"required>
                            @foreach ($suppliers as $supplier)
                            <option value="{{$supplier->id}}" {{ $supplier->id == $data->supplier_id ? 'selected' : '' }}>{{$supplier->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Storage</label>
                          <select  class="form-control" name="storage_id" required>
                            @foreach ($storage as $stor)
                            <option value="{{$stor->id}}" {{ $stor->id == $data->storage_id ? 'selected' : '' }}>{{$stor->name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Total Stocks</label>
                            <input type="number" class="form-control" name="total_stocks"  value="{{$data->total_stocks}}"   required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection