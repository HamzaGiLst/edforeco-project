@extends('layouts.app')
@section('title','got tot it itn')
@section('header')
    <link rel="stylesheet" href="js/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
            margin-left: 16rem;
        }
        .navbar{
            margin-bottom: 0rem;
        }
        .s130 form {
            width: 100%;
            max-width: 790px;
            padding-top: 0vh;
        }
        .s130 {
             min-height: 0vh;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            background-position: bottom right;
            background-repeat: no-repeat;
            /* background-size: 100%; */
            padding: 10px;
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
            top: 0rem;

        }
        .search-job2 input {
            position: relative;
            left: 10rem;
        }
        .sh {
            width: 330px;
            height: 40rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 0.25rem;
            margin-left: -1rem;
        }

        #Search-card{
            position: relative;
            left: -3rem;
        }
        .navbar-custom{
            background: rgba(69, 69, 69, 0.15);
        }
        #navbar-custom{
            background: #000;
        }
    </style>
@endsection

@section('navbar')
    <nav class="navbar navbar-expand navbar-dark bg-dark">
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
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">services</a>
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

    <div class="card" style="height: 10rem">

        <div class="s130" style="">
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
    </div>
        <div class="col-md-3">
            <div class="sh">
                <div class="card-head">
                    <button type="button" class="btn btn-primary">
                        Resultats de recherche  <span class="badge badge-light">{{$posts->count()}}</span>
                    </button>
                    <h5>par localisation</h5>
                    @foreach($posts as $p)
                        <button type="button" class="btn btn-primary">
                            {{$p->localization}} <span class="badge badge-light">4</span>
                        </button>
                    @endforeach
                    <h5>Entreprises</h5>
                    @foreach($posts as $p)
                        <button type="button" class="btn btn-primary">
                            {{$p['entreprise']}} <span class="badge badge-light">4</span>
                        </button><br>

                    @endforeach
                    <h5>Postes</h5>

                </div>
            </div>
        </div>

        <!--- justify-content-center-->
            <div class="col-md-9">
                    <!--           <div class="card-header">Dashboard</div>-->


                        @foreach($posts as $post)
                            <div class="card">
                                <div class="card-body">
                                    <div class="jobcard">
                                        <div class="title">
                                            <span><a href="#">{{$post['job']}}</a></span>
                                        </div>
                                        <div class="loc">
                                            <span>NEW-{{$post['localization']}}</span>
                                        </div>
                                        <div class="summary">
                                            <span>
                                                le salaire commence par {{$post['startsalary']}} DH <strong CLASS="btn bg-transparent">info</strong><?php echo $post['describe_poste'] ?>

                                            </span>
                                        </div>
                                        <div class="footer">
                                            {{$post['entreprise']}}-{{$post['created_at']}}
                                            <a href="job/{{$post['annonceid']}}">more</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        @endforeach
            </div>
    <div class="footer">
        <div class="">
            <div class="pagination" style="position: relative;left: 20rem">
                {{$posts->links()}}
            </div>
        </div>
    </div>
    <section id="footer">
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

    <script src="js/choices.js"></script>
@endsection