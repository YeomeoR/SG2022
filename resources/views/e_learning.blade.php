@extends('layouts.master')

@section('title')
    <h1 class="grid h-screen place-items-center">This is the new e-learning page title for square gain</h1>
@endsection

@section('signup')
    <div class="absolute  bottom-12 container w-screen">
        <input type="email" placeholder="Enter your email address to sign up to our latest news releases" class="p-2 w-3/5 ml-56">
        <input type="button" value="Sign Up" class="rounded bg-pink-500 p-2 text-white hover:bg-pink-400 cursor-pointer ">
    </div>
@endsection