@extends('layouts.app')

@section('title') create @endsection

@section('content')



<div class="container">
    <h3 class="text-center my-3">Create Note Page</h3>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter the title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="description" type="text" class="form-control" placeholder="Enter the description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Create Note</button>
    </form>

</div>





@endsection