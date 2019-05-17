@extends('layouts.app')
@section('title','list demandes de coaching')

@section('content')
    @foreach($coach as $c)
        <h1>{{$c['name'] }}</h1>
        <hr>
    @endforeach
@endsection