@extends('layouts.app')
@section('title','Return')
@section('body')
@php $active = 'return' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                    Return
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('return.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Asset</th>
                                <th scope="col">Return By</th>
                                <th scope="col">Return By Contact</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $return)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $return->asset->name}}</th>
                                <th scope="col">{{  $return->returned_by}}</th>
                                <th scope="col">{{  $return->returned_by_contact}}</th>
                                <th scope="col">{{  $return->quantity}}</th>
                                <th scope="col">{{  $return->reason}}</th>
                                <th scope="col">
                                    <form action="{{ route('return.destroy', $return->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('return.edit', $return->id) }}" class="btn btn-success btn-sm">Edit</a>
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