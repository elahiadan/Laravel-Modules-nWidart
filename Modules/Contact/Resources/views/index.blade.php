@extends('layouts.master')

@section('title','Contact | Module')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('contact.name') !!}
    </p>
@endsection
