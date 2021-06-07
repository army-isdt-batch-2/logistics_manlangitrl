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
                        Edit Delivery
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('delivery.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('delivery.update',$data->id)}}" method="post" class="row g-3">
                       @method('PUT')
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Distribution</label>
                          <select  class="form-control" name="distribution_id"required>
                            @foreach ($distributions as $distribution)
                            <option value="{{$distribution->id}}" {{ $distribution->id == $data->distribution_id ? 'selected' : '' }}>{{$distribution->requestor_name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Transportation</label>
                          <select  class="form-control" name="transportation_id" required>
                            @foreach ($transportations as $transportation)
                            <option value="{{$transportation->id}}"  {{ $transportation->id == $data->transportation_id ? 'selected' : '' }}>{{$transportation->driver_name}}</option>
                            @endforeach                         
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Date Distributed</label>
                            <input type="date" class="form-control" name="date_distributed" value="{{$data->date_distributed}}" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="name" class="form-label">Status</label>
                            <select name="status" class="form-control">
                            <option {{ $data->status == 'delivered' ? 'selected' : '' }}>delivered</option>
                            <option {{ $data->status == 'returned' ? 'selected' : '' }}>returned</option>
                            </select>
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