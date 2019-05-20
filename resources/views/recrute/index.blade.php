@extends('layouts.app')
@section('title','got tot it itn')
@section('header')
    <style>
        .search{
            padding: 1rem;
            margin-left: 21rem;
            position: relative;
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
    </style>
@endsection

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="#">EDFORECO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Offres<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/p">entreprise</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Formation et education</a>
                        <a class="dropdown-item" href="#">Coaching</a>
                        <div class="dropdown-divider"></div>

                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">find job</button>
            </form>
        </div>
    </nav>
@endsection
@section('content')

    <div class="card" style="">
        <div class="card-body" id="Search-card">
            <div class="search">
                <form action="" method="get" class="form-inline">
                                <span>
                                    <input type="text" name="key" id="key" placeholder="poste ou entreprise" class="form-control">
                                    <input type="text" name="where" class="form-control">
                                    <input type="submit" value="find job" class="btn btn-outline-primary">
                                </span>
                </form>
            </div>
        </div>
    </div>
    <div class="">
        <div class="col-md-4">
            <div class="sh">
                <div class="card-head">
                    <h1>filter</h1>
                    <h3>Job type</h3>
                    <h3>Location</h3>
                    <h3>Entreprises</h3>
                    @foreach($posts as $p)
                        {{$p['entreprise']}}
                        <hr>
                    @endforeach
                    <h3>Postes</h3>

                </div>
            </div>
        </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="" style="position:relative;top: -660px;text-shadow: 0 0 black;">
                    <!--           <div class="card-header">Dashboard</div>-->

                    <div class="card-body">
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
                                                le salaire commence par {{$post['startsalary']}} DH <strong CLASS="btn bg-transparent">info</strong>{{$post['describe_poste']}}

                                            </span>
                                        </div>
                                        <div class="footer">
                                            {{$post['entreprise']}}-{{$post['created_at']}}
                                            <a href="job?id={{$post['annonceid']}}">more</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="pagination justify-content-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
@endsection