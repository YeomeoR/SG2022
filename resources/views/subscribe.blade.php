@extends('layouts.master')
@include('includes.feedback')


@section('title')
<h1>THANKS FOR SUBSCRIBING TO OUR NEWSLETTER</h1>
<p> {{ $request->email }} </p>
@endsection