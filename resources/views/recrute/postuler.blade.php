@extends('layouts.app')

@section('title','Job Details')
@section('header')
    <link rel="stylesheet" href="../../css/app.css">
    <style>
        .applyForm{

            position: relative;
            margin-top: 3rem;
            margin-left: 32rem;
        }
        .applyForm1{
            margin-left: 2rem;
        }
        .applyForm2{
            margin-left: 4rem;
        }
        .applyForm1 input[type=submit] {
            background-color: #0693cd;
            border: 0;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-size:16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 16px;
            width: 230px
        }
        .applyForm2 input[type=submit] {
            background-color: #cd8041;
            border: 0;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-size:16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 16px;
            width: 230px
        }
        .row{
            margin-bottom: 2rem;
            margin-left: 2rem;
        }
        .content{
            margin-bottom: 2rem;
            margin-left: 2rem;
        }
        hr{
            margin-top: 5px;
            border: 5px solid #007bff;
            border-radius: 4px;
        }
        .card-body{
            background: rgb(245, 245, 245);
        }
        .card{
            margin-left: 96px;
        }
        p,ol,ul,pre{
            font-size: 17px;
        }
/*popup lging*/
        .account-popup {
            position: relative;
            float: left;
            width: 460px;
            background: #ffffff;
            z-index: 1;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            left: 50%;
            margin-left: -230px;
            margin-top: 140px;
            margin-bottom: 60px;
            text-align: center;
            padding: 40px 60px;
        }
        .account-popup .close-popup {
            position: absolute;
            top: -20px;
            width: 50px;
            height: 50px;
            float: none;
            margin: 0;
            right: -20px;
            text-align: center;
            line-height: 50px;
            color: #ffffff;
            font-size: 20px;
            background-color: #d85b65;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            cursor: pointer;
        }

        .account-popup > span {
            float: left;
            width: 100%;
            font-size: 13px;
            font-family: Open Sans;
            font-size: 13px;
            color: #888888;
            margin-top: 20px;
        }
        .account-popup > form {
            float: left;
            width: 100%;
            margin-top: 30px;
        }
        form, fieldset {
            margin: 0;
            padding: 0;
            border-style: none;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            margin-top: 16rem;
            background: rgba(33, 153, 167, 0.28);
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .bg-light1{
            background: rgba(218, 216, 254, 0.44);
            margin: 0px;
            height: 10rem;
        }

        .pageDoffre{
            margin-top: 18px;
            margin-bottom: 18px;
        }

    </style>
@endsection
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light1">
        <a class="navbar-brand" href="#"><img src="/img/logo.png" alt=""style="position: relative;
    top: -75px;
    left: 24px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/site" style="color: #ff3931;">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rhome" style="color: #ff3931;">Offres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/company" style="color: #ff3931;">Entreprise</a>
                </li>
                <li class="nav-item dropdown dropdown-menu-right">
                    <a  style="color: #ff3931;" class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
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

    <div class="pageDoffre">
        <div class="card">
            <table>
                <tr>
                    <td>Entreprise </td>
                    <td>{{ $_job->entreprise}}</td>
                    <td>Secteur</td>
                    <td>{{$_job['per_temp']}}</td>
                </tr>
                <tr>
                    <td> type contart :</td>
                    <td>{{ $_job->type_contrat }}</td>
                </tr>

            </table>
        </div>
        <div class="car" style="height: 10rem;width: 900px">
            <div class="body-car">
                <div class="applyForm">
                    <div class="form-inline">
                        <form action="/sendDemandeJob" class="applyForm1">
                            <input type="submit" value="Postuler" >
                        </form>
                        <form action="/savejob" class="applyForm2">
                            <input type="hidden" name="annonceid" value="{{$_job->annonceid}}">
                            <input type="hidden" name="condidatid" value="user">
                            <input type="submit" value="Save jobs" class="btn-outline" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="jobDetails">

        </div>
        <div class="card col-md-10">
            <div class="card-head">
                <h1>ENTREPRISE</h1>

                <hr>
            </div>
            <div class="card-body">
                <p>
                    <?php echo $_job->describe_entreprise?>
                </p>
            </div>
        </div>
        <div class="card col-md-10">
            <div class="card-head">
                <h1>DÉTAILS DE L'ANNONCE</h1>
                <hr>
            </div>
            <div class="card-body">
                <div class="poste">
                    <h2>POSTE PROPOSÉ:<?php echo strtoupper($_job->job)?></h2>
                    <p><?php echo $_job->describe_poste?></p>
                </div>
                <div class="profil">
                    <h2>PROFIL RECHERCHÉ POUR LE POSTE:<?php echo strtoupper($_job->job)?></h2>
                    <p>
                        <?php echo $_job->profil_recherche?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12"><section id="footer" style="color: #b0ab93 !important">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                            <ul class="list-unstyled list-inline social text-center">
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        </hr>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p><u><a href=""></a></u> </p>
                            <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="" target="_blank">EDFORECO</a></p>
                        </div>
                        </hr>
                    </div>
                </div>
            </section>
        </div>
    </div>



@endsection
