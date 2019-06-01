@extends("layouts.app")
@section('title','Coaching')
@section('header')
    <link rel="stylesheet" href="css/custom.css">
    <style>
        #footer {
            background: #343a40 !important;
        }
    </style>
    @endsection
@section('navbar')
    @include('inc.hnav')
@endsection
@section('content')
    <div class="container" style="background-image: url('https://images.pexels.com/photos/1811991/pexels-photo-1811991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');background-size: 115rem 59rem;">
        @if(count($errors)>0)
            @foreach($errors->all() as $er)
                <div class="alert alert-warning" role="alert">
                    {{$er}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach

        @endif
        <div class="coach_form">
            <form action="/store" method="post">
                {{ csrf_field() }}
                <div class="group-control">
                    <label for="one">nom ou entreprise</label>
                    <input type="text" name="name" class="form-control" placeholder="organization">
                </div>
                <div class="group-control">
                    <label for="two">email</label>
                    <input type="email" name="email" class="form-control" id="two">
                </div>
                <div class="group-control">
                    <label for="tree">Telephone</label>
                    <input type="text" name="tel" id="tree" class="form-control">
                </div>
                <div class="group-control">
                    <label for="for">Description de votre besoin</label>
                    <input type="text" name="besoin" id="for" class="form-control" >
                </div>
                <input type="submit" value="Envoyer" class="btn badge-secondary">
            </form>
        </div>
    </div>
    @include('inc.foot')
@endsection