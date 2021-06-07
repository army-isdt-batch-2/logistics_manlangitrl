@extends('layouts.app')
@section('title','Transportation')
@section('body')
@php $active = 'transportation' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                    Transportation
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('transportation.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Plate Number</th>
                                <th scope="col">Driver Name</th>
                                <th scope="col">Driver Contact</th>
                                <th scope="col">Notes</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            @foreach($data as $key=> $trans)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $trans->plate_number}}</th>
                                <th scope="col">{{  $trans->driver_name}}</th>
                                <th scope="col">{{  $trans->driver_contact}}</th>
                                <th scope="col">{{  $trans->notes}}</th>
                                <th scope="col">
                                    <form action="{{ route('transportation.destroy', $trans->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('transportation.edit', $trans->id) }}" class="btn btn-success btn-sm">Edit</a>
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