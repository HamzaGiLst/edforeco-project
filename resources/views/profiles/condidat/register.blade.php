@extends('layouts.app')

@section('title', 'register new account')

@section('header')
@endsection
@section('content')
    <body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            @if(count($errors)>0)

                                @foreach($errors->all() as $er)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        {{$er}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://images.pexels.com/photos/924633/pexels-photo-924633.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');background-size: 476px auto;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register condidat account</h1>
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control form-control-user" id="" aria-describedby="emailHelp" placeholder="Nom">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control form-control-user" id="" aria-describedby="" placeholder="Prenom">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="cv" class="form-control-file " id="" aria-describedby="" placeholder="Enter Email Address...">
                                        </div>
                                        <input type="submit" value="Register" class="btn btn-primary btn-user">
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection