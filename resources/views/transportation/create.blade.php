@extends('layouts.app')
@section('title','Transportation')
@section('body')
@php $active = 'transportation' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Create Transportation
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="{{route('transportation.index')}}" class="btn btn-warning pull-right">Back</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{route('transportation.store')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Plate Number</label>
                            <input type="text" class="form-control" name="plate_number" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" name="driver_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Driver Contact</label>
                            <input type="number" class="form-control" name="driver_contact" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Notes</label>
                         <textarea  class="form-control" name="notes"
                          required></textarea>
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