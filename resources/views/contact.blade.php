@extends('layout.app')

@section('title', 'Contact')

@section('content')

    this is <Strong>Contact</Strong> page.

    <form action="/contact" method="POST">

        @csrf
        <button type="submit">Send</button>

    </form>

@endsection

@section('style')

    <style>
        body
        {

        }
    </style>

@endsection
