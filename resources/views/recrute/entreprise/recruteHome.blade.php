@extends('layouts.app')
@section('title','chercher vous dreams')
@section('header')
    <link rel="stylesheet" href="js/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <style>
        .navbar-expand {
            position: absolute;
        }
        .navbar-expand li {
            font-size: 18px;
        }

        .N {
            font-size: 53px;
            color: #00ad5f;
        }
        #side{
            margin-left: 32rem;
        }
        #s2 ,#s3 {
            margin-left: 2rem;
        }
        .foo{
            background:darkslategrey;
        }
        .s130 form{
            padding-top: 30vh;
            position: relative;
            top: 11rem;
        }
        .btn1 {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 16px;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .btn-outline-primary1 {
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: rgba(255, 255, 255, 0.98);
        }
        .btn-outline-primary1:hover{
            color: #FFFFFF;
            background: #007bff;
        }
        .btn-outline-danger1 {
            color: #dc3545;
            background-color: transparent;
            background-image: none;
            border-color: rgba(255, 255, 255, 0.98);
        }
        .btn-outline-danger1:hover{
            color: #FFFFFF;
            background: #dc3545;
        }
        .btn-outline-success1 {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: rgba(255, 255, 255, 0.98);
        }
        .btn-outline-success1:hover{
            color:#FFFFFF;
            background: #28a745;
        }

        .form-control1 {
            display: block;
            width: 213%;
            padding: .375rem .75rem;
            font-size: 15px;
            line-height: 1.5;
            color: #000000;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 2.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

    </style>

@endsection
@section('navbar')
    <nav class="navbar-expand navbar-dark">
        <a class="navbar-brand" href="/rhome"><img src="img/logo.png" alt="" width="117px"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/site" style="color: #1b0100;background: #ffffffd6;">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rhome" style="color: #1b0100;background: #ffffffd6;">Offres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company" style="color: #1b0100;background: #ffffffd6;">Entreprise</a>
                </li>
                <li class="nav-item dropdown dropdown-menu-right">
                    <a  style="color: #1b0100;background: #ffffffd6;" class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                    <li class="nav-item" id="side">
                        <a class="nav-link" href="/condidat/login"><button class="btn1 btn-pill btn-outline-success1">Conecter</button></a>
                    </li>
                    <li class="nav-item" id="s2">
                        <a class="nav-link" href="/condidats"><button class="btn1 btn-outline-danger1">S'inscrire</button></a>
                    </li>
                    <li class="nav-item" id="s3">
                        <a class="nav-link " href="/camp"><button class="btn1 btn-outline-primary1">Espace Recruteur</button></a>
                    </li>

            </ul>
        </div>
    </nav>

@endsection
@section('content')

    <div class="s130" style="background-image: url('img/emploi.jpg')">
        <form action="/jobs" method="get">
            <div class="inner-form">
                <div class="input-field first-wrap">
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                        </svg>
                    </div>
                    <input name="key" id="search" type="text" placeholder="poste enterprise keyword" />
                    <input name="where" id="search" type="text" placeholder="localisation" />
                </div>
                <div class="input-field second-wrap">
                    <input type="submit" class="btn-search" value="FIND JOB">
                </div>
            </div>
            <span class="info"></span>
        </form>
    </div>

    <div class="card">
        <div class="card-head" >
            <div class="text-center">
                <h1>Nos derniers chiffres</h1>
        </div>
        <div class="card-body">

            <div class="custom-chiffre">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center" >
                    <div class="N" >{{$offre}}</div>
                    <h5>Offres en ligne</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="N" >{{$recruteur}}</div>
                    <h5>Recruteurs actifs</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="N" >{{$chercheur}}</div>
                    <h5>Chercheur D'emploie</h5>
                </div>
            </div>
        </div>
    </div>




@include('inc.foot')

    <script src="js/choices.js"></script>
@endsection
