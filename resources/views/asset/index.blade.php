@extends('layouts.app')
@section('title','Asset')
@section('body')
@php $active = 'asset' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                    Asset
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('asset.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Total Stocks</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $asset)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $asset->name}}</th>
                                <th scope="col">{{  $asset->description}}</th>
                                <th scope="col">{{  $asset->category}}</th>
                                <th scope="col">{{  $asset->supplier->name}}</th>
                                <th scope="col">{{  $asset->storage->name}}</th>
                                <th scope="col">{{  $asset->total_stocks}}</th>

                                <th scope="col">
                                    <form action="{{ route('asset.destroy', $asset->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('asset.edit', $asset->id) }}" class="btn btn-success btn-sm">Edit</a>
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