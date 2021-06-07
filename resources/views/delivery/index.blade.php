@extends('layouts.app')
@section('title','Delivery')
@section('body')
@php $active = 'delivery' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                    Delivery
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('delivery.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Distribution</th>
                                <th scope="col">Transportation</th>
                                <th scope="col">Date Distributed</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $delivery)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $delivery->distribution->requestor_name}}</th>
                                <th scope="col">{{  $delivery->transportation->driver_name}}</th>
                                <th scope="col">{{  $delivery->date_distributed}}</th>
                                <th scope="col">{{  $delivery->status}}</th>
                                <th scope="col">
                                    <form action="{{ route('delivery.destroy', $delivery->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('delivery.edit', $delivery->id) }}" class="btn btn-success btn-sm">Edit</a>
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