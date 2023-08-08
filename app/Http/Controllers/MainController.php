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
    public function index($modifiedId=null)
    {
        $messages = Message::get();
        return view('messages', [
            'messages' => $messages,
            'modifiedId' => $modifiedId
        ]);
    }
    public function delete($id)
    {
        $message = Message::find($id);
        $message -> delete();
        return redirect('/deleted/'. $id);
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('editMessage', [
            'message' => $message,
        ]);
    }
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'name' => 'required|max:20',
            'title' => 'required|max:20'
        ]);
        $message = Message::find($id);
        $message -> update([
        'name' => $request -> name,
        'title' => $request -> title,
        'message' => $request -> message]);
        return redirect('/edited/'. $id);
    }
}
