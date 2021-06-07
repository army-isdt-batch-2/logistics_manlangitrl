@extends('layouts.app')
@section('title','Supplier')
@section('body')
@php $active = 'supplier' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                        Supplier
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('supplier.create')}}" class="btn btn-primary pull-right">Create</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-8"></div>
                <div class="col-4 text-end">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact Person</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $supplier)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $supplier->name}}</th>
                                <th scope="col">{{  $supplier->address}}</th>
                                <th scope="col">{{  $supplier->contact_person}}</th>
                                <th scope="col">{{  $supplier->category}}</th>
                                <th scope="col">
                                    <form action="{{ route('supplier.destroy', $supplier->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button type="button" class="btn btn-danger  btn-sm" onclick="confirm('{{ __("Are you sure you want to delete this?") }}') ? this.parentElement.submit() : ''">Delete</button>
                         
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection