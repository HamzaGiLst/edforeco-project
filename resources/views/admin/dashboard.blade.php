@extends('layouts.app')
@section('title','admin panel')
@section('header')
    <style>
        #sidebar-wrapper {
            min-height: 87vh;
            margin-left: 0px;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }
        .bg-light {
            background-color: #f8f9fa1f !important;
            width: 205%;
            margin-top: 39px;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }
    </style>
    @extends('inc.froalaeditor')
@endsection
@section('content')
    <div class="col-lg-3" style="background-image: url(https://images.pexels.com/photos/1699025/pexels-photo-1699025.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500);
    height: 100%;">
        <div class="card" style="height: 100%;
    background: #00000091;
    width: 110%;
    margin-left: -15px;">
            <div class="card-head">
                <h1>admin panel</h1>
            </div>
            <div class="card-body">
                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading">Start Bootstrap </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="formation">
            <h1>formation</h1>
            @foreach($edu as $e)
                {{$e}}
            @endforeach
        </div>
        <div class="coach">
            <h1>coaching</h1>
            @foreach($coach as $c)
                {{$c}}
            @endforeach
        </div>
    </div>
    @endsection