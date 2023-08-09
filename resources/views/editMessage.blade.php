@extends('layouts.app')

@section('loginform')
<h1>Edit Message</h1>
<form action="/editmessage/{{$message['id']}}" method="POST">
    @method('PATCH')
    <label for="name">Name</label>
    <div><input type="text" value="{{$message['name']}}" name="name" placeholder="Your Name"></div>
    @error('name')
        {{$message}}
    @enderror
    <br>
    <label for="name">Title</label>
    <div><input type="text" value="{{$message['title']}}" name="title" placeholder="Title of message"></div>
    @error('title')
        {{$message}}
    @enderror
    <br>
    <label for="name">Message</label>
    <div><textarea name="message" cols="30" rows="10">{{$message['message']}}</textarea></div>
    @csrf
    <input type="submit" value="submit">
</form>
@endsection
