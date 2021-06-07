@extends('layouts.app')
@section('title','Distribution')
@section('body')
@php $active = 'distribution' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Create Distribution
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('distribution.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('distribution.store')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Requestor Name</label>
                            <input type="text" class="form-control" name="requestor_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Requestor Contact</label>
                            <input type="text" class="form-control" name="requestor_contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Purpose</label>
                            <input type="text" class="form-control" name="purpose" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Asset</label>
                            <select  class="form-control" name="asset_id" required>
                            <option value="" selected>--select asset--</option>
                            @foreach ($assets as $asset)
                            <option value="{{$asset->id}}">{{$asset->name}}</option>
                            @endforeach

                          </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Status</label>
                         <select  class="form-control" name="status" required>
                         <option>processing</option>
                         <option>declined</option>
                         <option>distributed</option>
                          </select>
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