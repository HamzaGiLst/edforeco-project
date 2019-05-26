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
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register company Account</h1>
                                    </div>
                                    <form method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control form-control-user" id="" aria-describedby="le nom d'entreprise" placeholder="nom d'entreprise">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="site" class="form-control form-control-user" id="" aria-describedby="" placeholder="site web">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="addresse" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="" placeholder="Addresse">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control form-control-user" id="" aria-describedby="" placeholder="ville">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="county" class="form-control form-control-user" id="" aria-describedby="" placeholder="country">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="activity" class="form-control form-control-user" id="" aria-describedby="" placeholder="activity">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control form-control-user" id="" aria-describedby="" placeholder="Tel:">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="" aria-describedby="" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="maincontact" class="form-control form-control-user" id="" aria-describedby="" placeholder="main contact">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
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