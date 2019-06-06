@extends('layouts.app')
@section('title','profile d entreprise')
@section('header')
    <script>
        $(document).ready(function () {
            $('.profil').hide();

            /*profile info link*/
            $('.pro').click(function () {
                $('.inline').hide();
                $('.table-responsive-lg').hide();
                $('.profil').show();
            })
            /*nos annonces link*/
            $('.post').click(function () {
                $('.inline').show();
                $('.table-responsive-lg').show();
                $('.profil').hide();
            })
        });
    </script>
    <style>
        .feather {
            width: 16px;
            height: 16px;
            vertical-align: text-bottom;
        }

        /*
         * Sidebar
         */

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100; /* Behind the navbar */
            padding: 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 48px; /* Height of navbar */
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #999;
        }

        .sidebar .nav-link.active {
            color: #007bff;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
            color: inherit;
        }

        .sidebar-heading {
            font-size: .75rem;
            text-transform: uppercase;
        }

        /*
         * Navbar
         */

        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .form-control {
            padding: .75rem 1rem;
            border-width: 0;
            border-radius: 0;
        }

        .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }

        /*
         * Utilities
         */

        .border-top { border-top: 1px solid #e5e5e5; }
        .border-bottom { border-bottom: 1px solid #e5e5e5; }


        /*profil logo */
        #sidebar .sidebarItem.opened .body {
            display: block;
        }
        #sidebar .sidebarItem  {
            padding: 0 10px 15px;
            display: none;
        }
        #sidebar .userSidebar .avatar {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }
        #sidebar .userSidebar .avatar img {
            margin-bottom: 10px;
            overflow: hidden;
            border-radius: 100px;
        }
        fieldset, img {
            border: 0;
        }

        #back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 9999;
            width: 32px;
            height: 32px;
            text-align: center;
            line-height: 30px;
            background: #f5f5f5;
            color: #444;
            cursor: pointer;
            border: 0;
            border-radius: 2px;
            text-decoration: none;
            transition: opacity 0.2s ease-out;
            opacity: 0;
        }
        #back-to-top:hover {
            background: #e9ebec;
        }
        #back-to-top.show {
            opacity: 1;
        }

        img {
            border-radius: 46px;
            margin-left: 5rem;
            width: 90px;
            margin-bottom: 1rem;
            border: 0;
            height: 90px;
        }

        /*callout*/
        .bs-callout {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 3px;
        }
        .bs-callout h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .bs-callout p:last-child {
            margin-bottom: 0;
        }
        .bs-callout code {
            border-radius: 3px;
        }
        .bs-callout+.bs-callout {
            margin-top: -5px;
        }
        .bs-callout-default {
            border-left-color: #777;
        }
        .bs-callout-default h4 {
            color: #777;
        }
        .bs-callout-primary {
            border-left-color: #428bca;
        }
        .bs-callout-primary h4 {
            color: #428bca;
        }
        .bs-callout-success {
            border-left-color: #5cb85c;
        }
        .bs-callout-success h4 {
            color: #5cb85c;
        }
        .bs-callout-danger {
            border-left-color: #d9534f;
        }
        .bs-callout-danger h4 {
            color: #d9534f;
        }
        .bs-callout-warning {
            border-left-color: #f0ad4e;
        }
        .bs-callout-warning h4 {
            color: #f0ad4e;
        }
        .bs-callout-info {
            border-left-color: #5bc0de;
        }
        .bs-callout-info h4 {
            color: #5bc0de;
        }

        /*nav bar options*/
        .nav-item:hover{
            color: #3490dc;
            background: #eeeeee;
        }
        .sidebar .nav-link {
            color: #007bff;
        }

    </style>
    @endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="background-image: url(https://images.pexels.com/photos/934964/pexels-photo-934964.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=3&h=750&w=1260);
    background-size: 59rem;">
                <div class="sidebar-sticky" style="background: #0000009c;">
                    <ul class="nav flex-column">
                        <li class="nav-ite">
                            <div class="body userSidebar">
                                <div class="avatar">
                                    <img src="https://www.gravatar.com/avatar/1ace5b3965c59dbcd1db79d85da75047?s=80" height="60" width="60">
                                    <div class="company" style="margin-left: 49px;">


                                        Elgin, Scotland
                                    </div>
                                </div> <!-- /avatar -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <div class="post">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Nos annonces
                                </a>
                            </li>
                        </div>
                        <div class="pro">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="profil"></span>
                                    Info Profile
                                </a>
                            </li>
                        </div>

                    </ul>


                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="/p">
                                <button class="btn btn-lg btn-primary btn-block">Nouvelle Annonce</button>
                            </a>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <h2 class="profil">Profile</h2>
                <div class="inline">
                    <div class="">
                        <div class="col-sm-3">
                            <div class="bs-callout bs-callout-primary">
                                <small class="text-muted">Postes</small><br>
                                <strong class="h4">{{$post->count()}}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="bs-callout bs-callout-success">
                                <small class="text-muted">Annonces sauvgardees</small><br>
                                <strong class="h4">{{$post->count()}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="table-responsive-lg">Nos Annonce</h2>
                <div class="table-responsive-lg">
                    <table class="table table-striped table-sm">
                        <thead class="thead-light">
                        <tr>
                            <th>#N annonce</th>
                            <th>Date</th>
                            <th>Poste</th>
                            <th>Localisation</th>
                            <th>Email</th>
                            <th>Type de contrat</th>
                            <th>Salaire</th>
                            <th>Description d'entreprise</th>
                            <th>Description de poste</th>
                            <th>Profil rechrche</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $p)
                            <tr>
                                <td><?php echo $p['annonceid'] ?></td>
                                <td>{{$p['created_at']}}</td>
                                <td>{{$p['job']}}</td>
                                <td>{{$p['localization']}}</td>
                                <td>{{$p['email']}}</td>
                                <td>{{$p['type_contrat']}}</td>
                                <td>{{$p['startsalary']}}</td>
                                <td><?php echo $p['describe_entreprise'] ?></td>
                                <td><?php echo $p['describe_poste'] ?></td>
                                <td><?php echo $p['profil_recherche'] ?></td>
                                <td><a href="/delete/{{$p['annonceid']}}"><button class="btn btn-danger">Supprimer</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <div class="profil">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register company Account</h1>
                                    </div>
                                    <form method="post" class="">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control form-control-user" id="" aria-describedby="le nom d'entreprise" placeholder="nom d'entreprise">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="logo" class="form-control-file" id="logo" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="site" class="form-control form-control-user" id="" aria-describedby="" placeholder="http://www.yourcompany.com">
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

                                        <input type="submit" value="Update" class="btn btn-primary btn-user">
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


@include('inc.backtoTop')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });


    </script>
    @endsection