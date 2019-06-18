@extends('layouts.app')
@section('title' ,'demane un formation')
@section('header')
    <link rel="stylesheet" href="css/custom.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#bb').hide();
            $('#formation').change(function () {
                var formation = document.getElementById('formation');
                var opt = formation.options[formation.selectedIndex];
 //               alert(opt.text);
                const need = "express votre besoin";
                if ( opt.text == need ){
                    $('#bb').show();
                }else {$('#bb').hide();}
            });



        });
    </script>
    <style>

        .bg-light1 {
            border-radius: 0px;
            margin: 0px!important;
            background-color: #353333!important;
            font-size: 19px;
            height: 93px;
        }

        h5{
            color: #f60!important;
            font-size: 2.25rem!important;
            background: #ff660014;
            margin-bottom: 5px;
            height: 3rem!important;
        }


        #footer {
            background: #343a40 !important;
        }
        .navbar{
            border-radius: 0px;
        }
        .article{
            margin-left: -37px;
            margin-top: 6rem;
        }
        .formation-form{
            margin-bottom: 3rem;
        }
        .img{
           
            margin-top: 6rem;


            margin-left: -177px;
        }

        #footer {
            background: #b0ab93 !important;
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
    <div class="container">
        <div class="col-md-6">
            <div class="car" style="">
                <img src="img/formation.jpg" alt="" class="img">
            </div>
        </div>
        <div class="col-md-6">
           <div class="article">
               <table style="width: 608px; height: 294px; margin-right: auto; margin-left: auto;">
                   <tbody>
                   <tr style="height: 20px; text-align: left;">
                       <td style="width: 590px; height: 20px;" colspan="3">
                           <h3 style="text-align: center;"><span style="color: #0064ad; font-size: 24pt;"><strong>FORMATION</strong></span></h3>
                       </td>
                   </tr>
                   <tr style="height: 23px;">
                       <td style="width: 293px; height: 20px;">
                           <p style="text-align: left;"><strong><span style="font-size: 12pt; color: #333333;">Ingénierie de formation&nbsp;</span></strong></p>
                       </td>
                       <td style="width: 28px; height: 23px;">&nbsp;</td>
                       <td style="width: 269px; height: 20px;">
                           <p style="text-align: left;"><strong><span style="font-size: 12pt; color: #333333;">Formations intra-entreprises</span></strong></p>
                       </td>
                   </tr>
                   <tr style="height: 23px;">
                       <td style="width: 293px; height: 20px;">
                           <p style="text-align: left;">Fort de son expérience dans l'accompagnement des sociétés performantes dans le développement de leur capital humain, EDFORECO  a développé une véritable expertise dans l'ingénierie de formation et la mise en place d'outils .</p>
                       </td>
                       <td style="width: 28px; height: 23px;">&nbsp;</td>
                       <td style="width: 269px; height: 20px;">
                           <p style="text-align: left;">Vous avez un besoin spécifique, nous construisons avec vous une formation / action se basant sur des cas concrets de l'entreprise avec des outils et méthodes transférables directement en situation de travail.</p>
                       </td>
                   </tr>
                   <tr style="height: 32px;">
                       <td style="width: 590px; height: 32px; vertical-align: top;" colspan="3">
                           <p style="text-align: justify;"><span class="lazy_container" style="width: 100px;"><span class="lazy_preloader" style="padding-top: 100%;"></span><img src="/images/flechejaune.png" class="lazy" alt="" width="33" height="33" style="display: inline;"></span><strong>&nbsp;</strong><strong>EDFORECO  s’appuie sur un solide réseau d’intervenants nationaux et internationaux, experts reconnus dans leur discipline, ayant une longue expérience du terrain et contribuant ainsi à assurer une qualité de haut niveau de nos interventions.</strong></p>
                       </td>
                   </tr>
                   </tbody>
               </table>
           </div>
        </div>


        <div class="car">
            <div class="col-md-6">
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
                <form method="post" action="/submit" class="formation-form" >
                    {{ csrf_field() }}
                    <div class="form-group row"><label for="enter" class="col-form-label text-md-right">Entreprise</label>
                        <input type="text" class="form-control" name="entreprise" id="enter" placeholder="le nom d'entreprise">
                    </div>
                    <div class="form-group row"><label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="  ">
                    </div>
                    <div class="form-group row"><label for="tel">Telephone</label>
                        <input type="text" class="form-control" name="phone" id="tel" placeholder=" ">
                    </div>
                    <label for="formation">formation</label><select name="choix_formation" id="formation" class="form-control">
                        <option >Choisir Formation</option>
                        <option >medcine</option>
                        <option >top</option>
                        <option >gb</option>
                        <option >informatique</option>
                        <option >express votre besoin</option>

                    </select>
                    <div class="form-group row" id='bb'><label for="b">besoin</label>
                        <input type="text" class="form-control" name="besoinf" id="b" placeholder=" ">
                    </div>
                    <div class="form-group row"><label for="sms">note</label>
                        <input type="text" class="form-control" name="sms" id="sms" placeholder=" ">
                    </div>
                    <input type="submit" value="Order Formation" class="btn btn-lg btn-primary">

                </form>
            </div>

        </div>
    </div>
    @include('inc.foot')
@endsection
