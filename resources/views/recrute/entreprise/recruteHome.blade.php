@extends('layouts.app')
@section('title','chercher vous dreams')
@section('header')
    <link rel="stylesheet" href="js/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <style>

        .bg-light1 {
            border-radius: 0px;
            margin: 0px!important;
            background-color: #353333!important;
            font-size: 19px;
        }

        .info{
            font-size: 43px!important;
            color: #ffffff!important;
            margin-left: 20px;
            margin-top: 32px;
            position: relative;
            top: 49px
        }
        .navbar-expand {
            position: absolute;
        }
        .navbar-expand li {
            font-size: 18px;
        }

        .N {
            font-size: 53px;
            background: #ff66000f;
            color: var(--orange);
        }
        #side{
            margin-left: 48rem;
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



        h5{
            color: #f60!important;
            font-size: 2.25rem!important;
            background: #ff660014;
            margin-bottom: 5px;
            height: 10rem!important;
        }

        .comment-ca-marche {
            background: #f60;
            color: #FFFFFF;
            padding: 110px 15px;
        }
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .comment-ca-marche .comment-ca-marche-items {
            margin-top: 40px;
        }
        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }
        .comment-ca-marche .comment-ca-marche-items img {
            margin: auto;
        }
        .comment-ca-marche .comment-ca-marche-items .item h3 {
            color: #ffffff;
            font-size: 16px;
            margin-top: 10px;
        }

        #footer {
            background: #b0ab93 !important;
        }
        #footer h5{
            height: 3rem!important;
        }
    </style>

@endsection
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light1">
        <a class="navbar-brand" href="#"><img src="https://www.freelogodesign.org/file/app/client/thumb/df10a544-12c1-4fa1-a7c0-f3322715dd93_200x200.png?1560709818159" alt=""style="position: relative;
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
                <li class="nav-item" id="side">
                    <a class="nav-link" href="/condidat/login"><button class="btn1 btn-pill btn-outline-success1">se connecter</button></a>
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
            <span class="info" style="    position: relative;top: -222px;margin: 0px!important;color: #ff3931!important;">
                Trouvez les meilleurs Offres d'emploi
            </span>
        </form>
    </div>

    <div class="card">
        <div class="card-head" style="margin-top: 29px;margin-bottom: 72px;" >
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

        <div class="card-body" style="padding: 0px;">
            <section class="comment-ca-marche">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInDown;">
                            <h2>Comment ça marche ?</h2>
                            <p>Notre plate-forme interactive vous permet de vous connecter <br> plus profondément avec vos coachs en face à face.</p>
                        </div>
                    </div>
                    <div class="comment-ca-marche-items">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-4 wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeInRight;">
                                    <div class="item text-center">
                                        <img src="https://img.icons8.com/dotty/80/000000/detective.png" class="img-responsive" alt="Trouver un offre">
                                        <h3>Trouver un offre</h3>
                                        <p>Une sélection des meilleurs offre à votre disposition</p>
                                    </div>
                                </div>
                                <div class="col-md-4 wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.7s; animation-name: fadeInRight;">
                                    <div class="item text-center">
                                        <img src="https://img.icons8.com/dotty/80/000000/submit-resume.png" class="img-responsive" alt="Upload CV">
                                        <h3>Uploader votre CV</h3>
                                        <p>non nonon</p>
                                    </div>
                                </div>
                                <div class="col-md-4 wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: fadeInRight;">
                                    <div class="item text-center">
                                        <img src="https://img.icons8.com/dotty/80/000000/filled-sent.png" class="img-responsive" alt="Postuler en ligne">
                                        <h3>Postuler</h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2 text-center">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>




@include('inc.foot')

    <script src="js/choices.js"></script>
@endsection
