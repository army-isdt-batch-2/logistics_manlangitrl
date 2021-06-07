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
                        Create Return
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('return.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('return.store')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-4">
                            <label for="name" class="form-label">Asset</label>
                            <select name="asset_id" class="form-control">
                            <option value=""selected>--select asset--</option>
                            @foreach($assets as $asset)
                            <option value="{{$asset->id}}">{{$asset->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Contact</label>
                            <input type="number" class="form-control" name="contact" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Contact Person</label>
                         <input type="text" class="form-control" name="contact_person"
                          required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection