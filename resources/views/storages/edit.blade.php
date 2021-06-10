@extends('layouts.app')
@section('title','Storage')
@section('body')
@php $active = 'storage' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Edit Storage
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('storages.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('storages.update',$data->id)}}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Building</label>
                            <input type="text" class="form-control" name="building"  value="{{$data->building}}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Floor</label>
                            <input type="text" class="form-control" name="floor" value="{{$data->floor}}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Room</label>
                         <input type="text" class="form-control" name="room" value="{{$data->room}}"
                          required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Cabinet</label>
                            <input type="text" class="form-control" name="cabinet"  value="{{$data->cabinet}}"required>
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