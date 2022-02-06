@extends('layouts.master')

@section('title','Category | Module')

@section('content')
    <h1>Hello World</h1>

    <p class="adan">
        This view is loaded from module: {!! config('category.name') !!}
    </p>
@endsection
