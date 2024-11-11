@extends('layouts.app')

@section('title') index @endsection

@section('content')





 <!-- Navbar -->
   
    
    <div class="container">
        <h3 class="text-center my-3">My Notes</h3>

        @foreach ($notes as $note)
            
            <div class="card mt-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                        <!-- Title on the right -->
                    <div class="ms-auto">{{$note->title}}</div>
                    <div>
                        <a href="{{route('edit', $note->id)}}" class="link1"><i class="fas fa-edit mx-1"></i></a>

                        <form action="{{route('destroy', $note->id)}}" method="POST" class="link1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete"><i class="fas fa-trash mx-1" style="color:#696d6b; "></i></button>

                       </form>
                        
                        {{-- <i class="fas fa-heart mx-1"></i> --}}
                    </div>
                    
                    
                </div>
                <div class="card-body">
                <p class="card-text">{{$note->description}}</p>
                <div class="note-date-div">
                    <span class="note-date">{{$note->created_at}}</span>
                </div>
                </div>
             
            </div>
        @endforeach
   
</div>








 @endsection