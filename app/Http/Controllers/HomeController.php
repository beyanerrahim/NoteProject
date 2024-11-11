<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

 use App\Models\Note;

use App\Models\User;

class HomeController extends Controller
{

   

    public function index()
    {
        $user_id = Auth::user()->id;
        //dd( $user_id);
         
        $notesFromDB = Note::where('user_id', $user_id)->get();      //collection object
    
        return view(view: 'home', data: ['notes'=> $notesFromDB]);
       
    }

    public function create(){

        return view('create');

    }


    public function store(){

    $user_id = Auth::user()->id;

    $data = request()->all();
    $title = request()->title;
    $description = request()->description;

    
      Note::create([
        'title'=> $title,
        'description'=> $description,
        'user_id'=>$user_id
      ]);


        return to_route(route: 'home');
    }


    public function edit(Note $note){
       
           return view('edit',data: ['note'=> $note]);
    }



    public function update($noteId){
        
        $title = request()->title;
        $description = request()->description;

        
        $singleNoteFromDB = Note :: find($noteId);
        
        $singleNoteFromDB->update([
              'title'=> $title,
              'description'=> $description,
              
        ]);
     
        return to_route(route: 'home');
 }


    public function destroy($noteId){

        $note = Note :: find($noteId);
        $note->delete();

        //Post::where('id',$postId)->delete();

        return to_route(route: 'home');

    }
}
