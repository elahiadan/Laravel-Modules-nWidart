@extends('layouts.master')

@section('title','Order | Module')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('order.name') !!}
    </p>
@endsection
