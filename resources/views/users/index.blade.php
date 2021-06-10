@extends('layouts.app')
@section('title','User')
@section('body')
@php $active = 'user' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">
                <div class="col-10">
                    <h4>
                        Users List
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('users.create')}}" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($data as $key=> $user)
                            <tr>
                                <th scope="col">{{++$key}}</th>
                                <th scope="col">{{  $user->name}}</th>
                                <th scope="col">{{  $user->username}}</th>
                                <th scope="col">
                                @if($user->avatar=='profile.jpg')
                                <img src="{{asset('/img/default.jpg')}}" width="42" height="42" class="rounded-circle"> 
                                @else
                                <img src="{{asset('storage/'.$user->avatar)}}" width="42" height="42" class="rounded-circle"> 
                                @endif
                                </th>
                                <th scope="col">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a type="button" href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>
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