@extends('layouts.app')

@section('title') edit @endsection

@section('content')



<div class="container">
    <h3 class="text-center my-3">Edit Page</h3>
    <form method="POST" action="{{route('update' , $note->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter the title" value="{{$note->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea name="description" type="text" class="form-control" placeholder="Enter the description"> {{$note->description}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Note</button>
    </form>

</div>





@endsection