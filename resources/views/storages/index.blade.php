@extends('layouts.app')
@section('title','Storage')
@section('body')
@php $active = 'storage' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                        Storage
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('storages.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Building</th>
                                <th scope="col">Floor</th>
                                <th scope="col">Room</th>
                                <th scope="col">Cabinet</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $storage)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $storage->name}}</th>
                                <th scope="col">{{  $storage->building}}</th>
                                <th scope="col">{{  $storage->floor}}</th>
                                <th scope="col">{{  $storage->room}}</th>
                                <th scope="col">{{  $storage->cabinet}}</th>

                                <th scope="col">
                                    <form action="{{ route('storages.destroy', $storage->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('storages.edit', $storage->id) }}" class="btn btn-success btn-sm">Edit</a>
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