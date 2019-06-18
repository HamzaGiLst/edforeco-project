@extends('layouts.app')

@section('title','main hub')

@section('header')
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body{
           font-size: 15px;
        }

        .bg-light1 {
            border-radius: 0px;
            margin: 0px!important;
            background-color: #353333!important;
            font-size: 19px;
            height: 93px;
        }



        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
            background-color: #777;
        }
        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 35rem;
        }
        .navbar{
            border-radius: 0px;
        }

        #footer {
            background: #b0ab93 !important;
        }

        h5{
            color: #f60!important;
            font-size: 2.25rem!important;
            background: #ff660014;
            margin-bottom: 5px;
            height: 3rem!important;
        }



        /*slider box*/

        .EdforecoSlider{
            background: #f60;
            height: 48rem;
            width: 100%;
        }
        .EdforecoSlider img{
            height: 48rem;
        }

        .slide1text{
            position: relative;
            top: -39rem;
            width: 36%;
            left: 183px;
            height: 28rem;
            background-color: #12151712;
            animation: mymove 2s;
        }
        @keyframes mymove {
            from {left: 0px;}
            to {left: 350px;}
        }


        .btn1 {
            border: 1px solid black;
            width: 23rem;
            height: 38px;
            font-size: 18px!important;
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

        .bottons{
            position: relative;
            left: 90px;
        }

        .box{
            position: relative;
            left: -14px;
            top: 153px;
            background-color: #b0ab9336 !important;
            height:25rem;
        }
        .box h3{
            font-family: ALEGREYA,sans-serif;
            font-size: 32px;
            color: #f00
        }

        .nav-link{
            margin-right: 17px;
            color: #ff3931;
            font-family: "Lucida Console", Monaco, monospace;
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

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ff3931;">
                        Notre Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: rgba(33,153,167,0.16)">
                        <div class="dropdown-header"></div>
                        <a class="dropdown-item" href="/formation">Formation et Education</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/rhome">Recrutement et Emploie</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/coaching">Coaching</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #ff3931;">Qui sommes-nous ?

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #ff3931;">Contact

                    </a>
                </li>
            </ul>

        </div>
    </nav>

@endsection
@section('content')

   <!-- @ include('inc.slider')-->

    <div class="EdforecoSlider" style="">
        @include('inc.slider')
    </div>

    <div class="card">
        <div class="card-header" style="background: #ff660061;">
            <div class="justify-content-center" style=" position:relative;left:36rem;font-size: 18px;color: #ec4c00;font-family: bold,Helvetica;">
                CABINET DE RECRUTEMENT ET CONSEIL et Formation RH
            </div>
        </div>
    </div>

    @include('inc.foot')



    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 10000); // Change image every 2 seconds
        }
    </script>
@endsection