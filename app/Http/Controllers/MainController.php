<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create($submittedName=null)
    {
        return view('contactUs', [
            'name' => $submittedName
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
    public function index(Message $editedmessage=null)
    {
        $messages = Message::get();
        return view('messages', [
            'messages' => $messages,
            'editedmessage' => $editedmessage
        ]);
    }
    public function destroy(Message $message)
    {
        $message -> delete();
        return redirect('/deleted/' . $message['id']);
    }

    public function edit(Message $message)
    {
        return view('editMessage', [
            'message' => $message,
        ]);
    }
    public function update(Request $request, Message $message)
    {
        $this -> validate($request, [
            'title' => 'required|max:20'
        ]);
        $message -> update([
        'title' => $request -> title,
        'message' => $request -> message]);
        return redirect('/edited/'. $message['id']);
    }
}
