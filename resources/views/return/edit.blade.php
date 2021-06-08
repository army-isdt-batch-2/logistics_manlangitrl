@extends('layouts.app')
@section('title','Return')
@section('body')
@php $active = 'return' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Edit Return
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('return.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('return.update',$data->id)}}" method="post" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <label for="name" class="form-label">Asset</label>
                            <select name="asset_id" class="form-control" required>
                            <option value="" selected>--select asset--</option>
                            @foreach($assets as $asset)
                            <option value="{{$asset->id}}" {{ $asset->id == $data->asset_id ? 'selected' : '' }}>{{$asset->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Return By</label>
                            <input type="text" class="form-control" name="returned_by" value="{{$data->returned_by}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Return By Contact</label>
                            <input type="number" class="form-control" name="returned_by_contact" value="{{$data->returned_by_contact}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Quantity</label>
                         <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Reason</label>
                            <textarea type="text" class="form-control" name="reason" required>{{$data->reason}}</textarea>
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