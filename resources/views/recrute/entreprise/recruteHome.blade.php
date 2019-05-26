@extends('layouts.app')
@section('title','chercher vous dreams')
@section('header')
    <style>

        .navbar {
            margin-bottom: 20px;
        }
        .search-job2 {
            float: left;
            width: 100%;
            background: rgba(24, 74, 255, 0.81);
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            -ms-border-radius: 60px;
            -o-border-radius: 60px;
            border-radius: 60px;
            margin-top: 50px;
            padding: 9px;
            position: relative;
            top: 10rem;
        }
        navbar-custom{
            background: #1b4b72;
            color: #1b4b72;
        }
        .search-job2 input {
            position: relative;
            left: 10rem;
        }
    </style>

@endsection
@section('navbar')
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/rhome">EDFORECO</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">OFFRES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Entreprise</a>
                </li>
                <li class="nav-item dropdown dropdown-menu-right">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

@endsection
@section('content')





    <div class="card" style="height: 30rem;background: #1b4b72;background-image:url('img/emploi.jpg');background-size: auto 50rem ;">
        <div class="card-body">
            <div class="search-job2">
                <form action="/jobs" method="get" class="form-inline">
                                <span>
                                    <input type="text" name="key" id="key" placeholder="poste ou entreprise" class="form-control-lg">
                                    <input type="text" name="where" class="form-control-lg">
                                    <input type="submit" value="find job" class="btn btn-success btn-ladda-progress" data-style="expand-right">
                                </span>
                </form>
            </div>
        </div>
        <div class="card" style="position: relative;top:50rem;background: #1b4b72 ">
            <div class="card-body">
                <footer class="container py-5">
                    <div class="row">
                        <div class="col-12 col-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                            <small class="d-block mb-3 text-muted">© 2017-2018</small>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Coordonne</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Cool stuff</a></li>
                                <li><a class="text-muted" href="#">Random feature</a></li>
                                <li><a class="text-muted" href="#">Team feature</a></li>
                                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                                <li><a class="text-muted" href="#">Another one</a></li>
                                <li><a class="text-muted" href="#">Last time</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>SERVICE</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Formation et education</a></li>
                                <li><a class="text-muted" href="#">Coaching</a></li>
                                </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>RECRUTEMENT ET EMPLOIE</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Notre Offres</a></li>
                                <li><a class="text-muted" href="#">Poster Annonce</a></li>
                                <li><a class="text-muted" href="#">Government</a></li>
                                <li><a class="text-muted" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Newsletter</h5>
                            <ul class="list-unstyled text-small">
                                <form action="" style="">
                                    <input type="email" class="form-control">
                                    <input type="submit" value="Envoyer" class="btn btn-primary">
                                </form>
                            </ul>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

@endsection
