@extends('layouts.proapp')
@section('title','profile d entreprise')
@section('header')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

    <style>
        .dark-edition .card .card-header-primary .card-icon, .dark-edition .card .card-header-primary .card-text, .dark-edition .card .card-header-primary:not(.card-header-icon):not(.card-header-text), .dark-edition .card.bg-primary, .dark-edition .card.card-rotate.bg-primary .front, .dark-edition .card.card-rotate.bg-primary .back {
            background: linear-gradient(60deg, #c32522, #6f1616eb)!important;
        }
        .navbar-brand {
            float: left;
            height: 50px!important;
            padding: 15px 15px!important;
            font-size: 18px!important;
            line-height: 20px!important;
        }

        .material-icons {
            font-size: 2.25rem!important;

        }

        th,td{
            font-size:13px!important;
        }

    </style>
@endsection
@section('content')
    <div class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="orange" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                Tip 2: you can also add an image using data-image tag
            -->
                <div class="logo">
                    <a href="sit" class="simple-text logo-normal">
                        <img src="/img/logo.png" alt=""style="">
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item  ">
                            <a class="nav-link" href="/entreprise">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/entrepriseUser">
                                <i class="material-icons">person</i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/entrepriseNosoffre">
                                <i class="material-icons">content_paste</i>
                                <p>Nos Offres</p>
                            </a>
                        <li class="nav-item ">
                            <a class="nav-link" href="/entrepriseNewoffre">
                                <i class="material-icons">note_add</i>
                                <p>Noouvelle Offres</p>
                            </a>
                        </li>                           <!-- your sidebar here -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:void(0)">Nos Offres</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="notification">5</span>
                                        <p class="d-lg-none d-md-block">
                                            Some Actions
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                                        <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                        <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                                    </div>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/entreprise/logout"><button class="btn btn-danger btn-block"> <span class="glyphicon glyphicon-log-out"></span> log out</button></a>
                                    </div>
                                </li>
                                <!-- your navbar here -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h3 class="card-title ">Simple Table</h3>
                                        <p class="card-category"> Here is a subtitle for this table</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                <tr>
                                                    <th>#N annonce</th>
                                                    <th>Date</th>
                                                    <th>Poste</th>
                                                    <th>Secteur d'activité</th>
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
                                                        <td>{{$p['per_temp']}}</td>
                                                        <td>{{$p['localization']}}</td>
                                                        <td>{{$p['email']}}</td>
                                                        <td>{{$p['type_contrat']}}</td>
                                                        <td>{{$p['startsalary']}}</td>
                                                        <td style="width: auto"><?php echo $p['describe_entreprise'] ?></td>
                                                        <td><?php echo $p['describe_poste'] ?></td>
                                                        <td><?php echo $p['profil_recherche'] ?></td>
                                                        <td><a href="/delete/{{$p['annonceid']}}"><button class="btn btn-danger" style="font-size: 12px;"><span class="glyphicon glyphicon-trash"></span> Supprimer</button></a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- your content here -->


                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://www.creative-tim.com">
                                        Edforeco
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- your footer here -->
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="./assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="./assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
@endsection