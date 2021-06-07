@extends('layouts.app')
@section('title','Supplier')
@section('body')
@php $active = 'supplier' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Edit Supplier
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('supplier.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('supplier.update',$data->id)}}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Contact</label>
                            <input type="number" class="form-control" name="contact"  value="{{$data->contact}}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$data->address}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Contact Person</label>
                         <input type="text" class="form-control" name="contact_person" value="{{$data->contact_person}}"
                          required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category"  value="{{$data->category}}"required>
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