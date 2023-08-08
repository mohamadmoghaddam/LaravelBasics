<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create($name=null)
    {   
        return view('contactUs', [
            'name' => $name
        ]);
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required|max:20',
            'title' => 'required|max:20'
        ]);
        Message::create([
            'name' => $request -> name,
            'title' => $request -> title,
            'message' => $request -> message
        ]);
        return redirect('/submitted/'. ($request -> name));
    }
    public function index(){
        $messages = Message::get();
        return view('messages', [
            'messages' => $messages
        ]);
    }
}
