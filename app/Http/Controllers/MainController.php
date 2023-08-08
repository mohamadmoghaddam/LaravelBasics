<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create()
    {
        return view('aboutUs');
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required|max:20',
            'title' => 'required|max:20'
        ]);
        $name = $request -> name;
        $title = $request -> title;
        $message = $request -> message;
        dump([$name, $title, $message]);
    }
}
