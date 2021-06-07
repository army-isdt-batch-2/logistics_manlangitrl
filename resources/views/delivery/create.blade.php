@extends('layouts.app')
@section('title','Delivery')
@section('body')
@php $active = 'delivery' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Create Delivery
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('delivery.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('delivery.store')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Distribution</label>
                          <select  class="form-control" name="distribution_id"required>
                          <option value="" selected>--Select--</option>
                            @foreach ($distributions as $distribution)
                            <option value="{{$distribution->id}}">{{$distribution->requestor_name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Transportation</label>
                          <select  class="form-control" name="transportation_id" required>
                          <option value="" selected>--Select--</option>
                            @foreach ($transportations as $transportation)
                            <option value="{{$transportation->id}}">{{$transportation->driver_name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Date Distributed</label>
                            <input type="date" class="form-control" name="date_distributed" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="name" class="form-label">Status</label>
                            <select name="status" class="form-control">
                            <option>delivered</option>
                            <option>returned</option>
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