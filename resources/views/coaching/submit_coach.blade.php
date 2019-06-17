@extends("layouts.app")
@section('title','Coaching')
@section('header')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css">
    <style>
        body{
            font-size: 14px;
        }
        .navbar{
            border-radius: 0px;
        }
        #footer {
            background: #343a40 !important;
        }


        .coach_form{
            margin-bottom: 15rem;
            margin-left: 10rem;
            margin-top: 4rem;
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
            height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .marketing h2 {
            font-weight: 400;
        }
        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
    @endsection
@section('navbar')
    @include('inc.hnav')
@endsection
@section('content')
    <div class="container-fluid" style="background-image: url('https://images.pexels.com/photos/1811991/pexels-photo-1811991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');background-size: 115rem 59rem;">

        <div class="slider">
            <div class="col-md-8">
                <div class="card" style="height: 30rem;background: trnsparent;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1>Example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active carousel-item-left">
                                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-next carousel-item-left">
                                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption text-right">
                                        <h1>One more for good measure.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="background: rgba(71,120,173,0.19)">
            <div class="coach_form">
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
                        <select class="">
                            @foreach($categorie as $c)
                                <option value="">{{$c}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="group-control">
                        <label for="for">Description de votre besoin</label>
                        <input type="text" name="besoin" id="for" class="form-control" >
                    </div>
                    <input type="submit" value="Envoyer" class="btn badge-secondary">
                </form>
            </div>
        </div>
    </div>
    @include('inc.foot')
@endsection