@extends('layouts.app')

@section('loginform')
<div>
@if($name)    
Thank you for sending a message  {{$name}}.
@endif
</div>
<h1>Contact Us</h1>
<form action="/submitmessage" method="post">
    <label for="name">Name</label>
    <div><input type="text" value="{{old('name')}}" name="name" placeholder="Your Name"></div>
    @error('name')
        {{$message}}
    @enderror
    <br>
    <label for="name">Title</label>
    <div><input type="text" value="{{old('title')}}" name="title" placeholder="Title of message"></div>
    @error('title')
        {{$message}}
    @enderror
    <br>
    <label for="name">Message</label>
    <div><textarea name="message" cols="30" rows="10" value="{{old('message')}}"></textarea></div>
    @csrf
    <input type="submit" value="submit">
</form>
@endsection
