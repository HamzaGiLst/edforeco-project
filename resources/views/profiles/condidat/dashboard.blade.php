@extends('layouts.app')
@section('title','dashboard')
@section('content')
    <div class="card">
        <h2>welcome {{$condidat->nom}} to your profile user</h2>
        <img src="{{asset($condidat->cv)}}" alt="">
        <div class="card-body">

        </div>
    </div>
    <div class="card-columns">
        @foreach($annoncesaved as $an)
            {{$an}}
        @endforeach

    @endsection



