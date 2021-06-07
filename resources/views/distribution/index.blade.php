@extends('layouts.app')
@section('title','Distribution')
@section('body')
@php $active = 'distribution' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                    Distribution
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('distribution.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Requestor Name</th>
                                <th scope="col">Requestor Contact</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">Asset</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $d)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $d->requestor_name}}</th>
                                <th scope="col">{{  $d->requestor_contact}}</th>
                                <th scope="col">{{  $d->purpose}}</th>
                                <th scope="col">{{  $d->asset->name}}</th>
                                <th scope="col">{{  $d->quantity}}</th>
                                <th scope="col">{{  $d->status}}</th>


                                <th scope="col">
                                    <form action="{{ route('distribution.destroy',$d->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('distribution.edit', $d->id) }}" class="btn btn-success btn-sm">Edit</a>
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