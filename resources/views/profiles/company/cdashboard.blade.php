@extends('layouts.proapp')
@section('title','profile d entreprise')
@section('header')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="./../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

    <style>
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
    </style>
@endsection
@section('content')
   <div class="dark-edition">
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
                       <li class="nav-item active  ">
                           <a class="nav-link" href="javascript:void(0)">
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
                       <li class="nav-item ">
                           <a class="nav-link" href="/entrepriseNosoffre">
                               <i class="material-icons">content_paste</i>
                               <p>Nos Offres</p>
                           </a>
                       </li>
                       <li class="nav-item ">
                           <a class="nav-link" href="/entrepriseNewoffre">
                               <i class="material-icons">note_add</i>
                               <p>Noouvelle Offres</p>
                           </a>
                       </li>
                       <!-- your sidebar here -->
                   </ul>
               </div>
           </div>
           <div class="main-panel">
               <!-- Navbar -->
               <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                   <div class="container-fluid">
                       <div class="navbar-wrapper">
                           <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
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
                                       <a class="dropdown-item" href="/entreprise/logout"><button>log out</button></a>
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
                           <div class="col-xl-4 col-lg-12">
                               <div class="card card-chart">
                                   <div class="card-header card-header-success">
                                       <div class="ct-chart" id="dailySalesChart"></div>
                                   </div>
                                   <div class="card-body">
                                       <h4 class="card-title">Daily Sales</h4>
                                       <p class="card-category">
                                           <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">access_time</i> updated 4 minutes ago
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-4 col-lg-12">
                               <div class="card card-chart">
                                   <div class="card-header card-header-warning">
                                       <div class="ct-chart" id="websiteViewsChart"></div>
                                   </div>
                                   <div class="card-body">
                                       <h4 class="card-title">Email Subscriptions</h4>
                                       <p class="card-category">Last Campaign Performance</p>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">access_time</i> campaign sent 2 days ago
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-4 col-lg-12">
                               <div class="card card-chart">
                                   <div class="card-header card-header-danger">
                                       <div class="ct-chart" id="completedTasksChart"></div>
                                   </div>
                                   <div class="card-body">
                                       <h4 class="card-title">Completed Tasks</h4>
                                       <p class="card-category">Last Campaign Performance</p>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">access_time</i> campaign sent 2 days ago
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                               <div class="card card-stats">
                                   <div class="card-header card-header-warning card-header-icon">
                                       <div class="card-icon">
                                           <i class="material-icons">content_copy</i>
                                       </div>
                                       <p class="card-category">Used Space</p>
                                       <h3 class="card-title">49/50
                                           <small>GB</small>
                                       </h3>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons text-warning">warning</i>
                                           <a href="#pablo" class="warning-link">Get More Space...</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                               <div class="card card-stats">
                                   <div class="card-header card-header-success card-header-icon">
                                       <div class="card-icon">
                                           <i class="material-icons">store</i>
                                       </div>
                                       <p class="card-category">Revenue</p>
                                       <h3 class="card-title">$34,245</h3>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">date_range</i> Last 24 Hours
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                               <div class="card card-stats">
                                   <div class="card-header card-header-danger card-header-icon">
                                       <div class="card-icon">
                                           <i class="material-icons">info_outline</i>
                                       </div>
                                       <p class="card-category">Fixed Issues</p>
                                       <h3 class="card-title">75</h3>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">local_offer</i> Tracked from Github
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                               <div class="card card-stats">
                                   <div class="card-header card-header-info card-header-icon">
                                       <div class="card-icon">
                                           <i class="fa fa-twitter"></i>
                                       </div>
                                       <p class="card-category">Followers</p>
                                       <h3 class="card-title">+245</h3>
                                   </div>
                                   <div class="card-footer">
                                       <div class="stats">
                                           <i class="material-icons">update</i> Just Updated
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-lg-6 col-md-12">
                               <div class="card">
                                   <div class="card-header card-header-primary">
                                       <h4 class="card-title">Employees Stats</h4>
                                       <p class="card-category">New employees on 15th September, 2016</p>
                                   </div>
                                   <div class="card-body table-responsive">
                                       <table class="table table-hover">
                                           <thead class="text-warning">
                                           <th>ID</th>
                                           <th>Name</th>
                                           <th>Salary</th>
                                           <th>Country</th>
                                           </thead>
                                           <tbody>
                                           <tr>
                                               <td>1</td>
                                               <td>Dakota Rice</td>
                                               <td>$36,738</td>
                                               <td>Niger</td>
                                           </tr>
                                           <tr>
                                               <td>2</td>
                                               <td>Minerva Hooper</td>
                                               <td>$23,789</td>
                                               <td>Curaçao</td>
                                           </tr>
                                           <tr>
                                               <td>3</td>
                                               <td>Sage Rodriguez</td>
                                               <td>$56,142</td>
                                               <td>Netherlands</td>
                                           </tr>
                                           <tr>
                                               <td>4</td>
                                               <td>Philip Chaney</td>
                                               <td>$38,735</td>
                                               <td>Korea, South</td>
                                           </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6 col-md-12">
                               <div class="card">
                                   <div class="card-header card-header-tabs card-header-warning">
                                       <div class="nav-tabs-navigation">
                                           <div class="nav-tabs-wrapper">
                                               <span class="nav-tabs-title">Tasks:</span>
                                               <ul class="nav nav-tabs" data-tabs="tabs">
                                                   <li class="nav-item">
                                                       <a class="nav-link active" href="#profile" data-toggle="tab">
                                                           <i class="material-icons">bug_report</i> Bugs
                                                           <div class="ripple-container"></div>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="#messages" data-toggle="tab">
                                                           <i class="material-icons">code</i> Website
                                                           <div class="ripple-container"></div>
                                                       </a>
                                                   </li>
                                                   <li class="nav-item">
                                                       <a class="nav-link" href="#settings" data-toggle="tab">
                                                           <i class="material-icons">cloud</i> Server
                                                           <div class="ripple-container"></div>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card-body">
                                       <div class="tab-content">
                                           <div class="tab-pane active" id="profile">
                                               <table class="table">
                                                   <tbody>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="">
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="">
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                       </td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                           <div class="tab-pane" id="messages">
                                               <table class="table">
                                                   <tbody>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                       </td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="">
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                           <div class="tab-pane" id="settings">
                                               <table class="table">
                                                   <tbody>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="">
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                       </td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check">
                                                               <label class="form-check-label">
                                                                   <input class="form-check-input" type="checkbox" value="" checked>
                                                                   <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                                               </label>
                                                           </div>
                                                       </td>
                                                       <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                       <td class="td-actions text-right">
                                                           <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">edit</i>
                                                           </button>
                                                           <button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
                                                               <i class="material-icons">close</i>
                                                           </button>
                                                       </td>
                                                   </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- your content here -->
                   </div>
               </div>
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
                       <div class="copyright float-right">
                           &copy;
                           <script>
                               document.write(new Date().getFullYear())
                           </script>, made with <i class="material-icons">favorite</i> by
                           <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                       </div>
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