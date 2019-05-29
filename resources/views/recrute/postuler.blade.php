@extends('layouts.app')

@section('title','Job Details')
@section('header')
    <link rel="stylesheet" href="../css/app.css">
    <style>
        .applyForm{

            position: relative;
            margin-top: 3rem;
            margin-left: 32rem;
        }
        .applyForm1{
            margin-left: 2rem;
        }
        .applyForm2{
            margin-left: 4rem;
        }
        .applyForm1 input[type=submit] {
            background-color: #0693cd;
            border: 0;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-size:16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 16px;
            width: 230px
        }
        .applyForm2 input[type=submit] {
            background-color: #cd8041;
            border: 0;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-size:16px;
            font-weight: bold;
            line-height: 1.4;
            padding: 16px;
            width: 230px
        }
        .row{
            margin-bottom: 2rem;
            margin-left: 2rem;
        }
        .content{
            margin-bottom: 2rem;
            margin-left: 2rem;
        }
        hr{
            margin-top: 5px;
            border: 5px solid #007bff;
            border-radius: 4px;
        }
        .card-body{
            background: rgb(245, 245, 245);
        }
        .card{
            margin-left: 96px;
        }
        p,ol,ul,pre{
            font-size: 17px;
        }
/*popup lging*/
        .account-popup {
            position: relative;
            float: left;
            width: 460px;
            background: #ffffff;
            z-index: 1;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            left: 50%;
            margin-left: -230px;
            margin-top: 140px;
            margin-bottom: 60px;
            text-align: center;
            padding: 40px 60px;
        }
        .account-popup .close-popup {
            position: absolute;
            top: -20px;
            width: 50px;
            height: 50px;
            float: none;
            margin: 0;
            right: -20px;
            text-align: center;
            line-height: 50px;
            color: #ffffff;
            font-size: 20px;
            background-color: #d85b65;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            cursor: pointer;
        }

        .account-popup > span {
            float: left;
            width: 100%;
            font-size: 13px;
            font-family: Open Sans;
            font-size: 13px;
            color: #888888;
            margin-top: 20px;
        }
        .account-popup > form {
            float: left;
            width: 100%;
            margin-top: 30px;
        }
        form, fieldset {
            margin: 0;
            padding: 0;
            border-style: none;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <table>
            <tr>
                <td>Entreprise </td>
                <td>{{ $_job->entreprise}}</td>
                <td>gg</td>
            </tr>
            <tr>
                <td> type contart :</td>
                <td>{{ $_job->type_contrat }}</td>
            </tr>
        </table>
    </div>
    <div class="car" style="height: 10rem;width: 900px">
        <div class="body-car">
            <div class="applyForm">
                <div class="form-inline">
                    <form action="/sendDemandeJob" class="applyForm1">
                        <input type="submit" value="Postuler" >
                    </form>
                    <form action="" class="applyForm2">
                        <input type="submit" value="Save jobs" class="btn-outline" >
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="jobDetails">

    </div>
    <div class="card col-md-10">
        <div class="card-head">
            <h1>ENTREPRISE</h1>

            <hr>
        </div>
        <div class="card-body">
            <p>
                <?php echo $_job->describe_entreprise?>
            </p>
        </div>
    </div>
    <div class="card col-md-10">
        <div class="card-head">
            <h1>DÉTAILS DE L'ANNONCE</h1>
            <hr>
        </div>
        <div class="card-body">
            <div class="poste">
                <h2>POSTE PROPOSÉ:<?php echo strtoupper($_job->job)?></h2>
                <p><?php echo $_job->describe_poste?></p>
            </div>
            <div class="profil">
                <h2>PROFIL RECHERCHÉ POUR LE POSTE:<?php echo strtoupper($_job->job)?></h2>
                <p>
                    <?php echo $_job->profil_recherche?>
                </p>
            </div>
        </div>
    </div>

    <div class="card col-md-5">
        <div class="account-popup">
            <span id="close-popup" class="close-popup"><i class="fa fa-times"></i></span>
            <h3>Se connecter</h3>

            <form name="userLoginForm" novalidate="" ng-controller="UserLoginCtrl" ng-submit="submit(userLoginForm.$valid, '/login.html')" class="ng-pristine ng-scope ng-valid-email ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-server">
                <div class="cfield" ng-class="{'error': userLoginForm.login.$invalid &amp;&amp; (((userLoginForm.login.$dirty || userLoginForm.login.$pristine) &amp;&amp; userLoginForm.login.$touched) || userLoginForm.$submitted), 'success':userLoginForm.login.$valid} ">
                    <input type="email" name="login" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-server" autocomplete="off" ng-model="data.login" placeholder="Login / E-mail" required="" app-validator-server="" minlength="1" maxlength="255" value="">
                    <i class="fa fa-user-o"></i>
                    <div class="uiTooltip bottom loginError">
                        <div class="uiTooltip-arrow"></div>
                        <div class="uiTooltip-inner ng-binding" ng-bind="errorMsg('login')">Champ obligatoire</div>
                    </div>
                </div>
                <div class="cfield" ng-class="{'error': userLoginForm.password.$invalid &amp;&amp; (((userLoginForm.password.$dirty || userLoginForm.password.$pristine) &amp;&amp; userLoginForm.password.$touched) || userLoginForm.$submitted), 'success':userLoginForm.password.$valid} ">
                    <input type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-server" app-related-model="userLoginForm.login" autocomplete="off" ng-model="data.password" name="password" value="" required="" app-validator-server="" minlength="2" maxlength="255" placeholder="Mot de passe">
                    <i class="fa fa-key"></i>
                    <div class="uiTooltip bottom loginError">
                        <div class="uiTooltip-arrow"></div>
                        <div class="uiTooltip-inner ng-binding" ng-bind="errorMsg('password')">Champ obligatoire</div>
                    </div>
                </div>
                <p class="remember-label">
                    <input type="checkbox" name="rememberMe" checked="checked" value="true" class="chk ng-pristine ng-untouched ng-valid" ng-init="data.rememberMe=true" ng-model="data.rememberMe"><label for="cb1">Rester connecté</label>
                </p>
                <a href="/password-perdu.html" title="">Mot de passe oublié ?</a>
                <button onclick="javascript:ga('send', 'event', 'ReKrute', 'JobOffer-Details', 'ConnecterAction');" type="submit" ng-enabled="userLoginForm.$valid" ng-class="{disabled:userLoginForm.$invalid}" class="disabled">Je me connecte</button>
                <a style="margin-top: 20px;text-decoration: none;font-size: 20px;" class="btn btn-default btn-block" title="Je m'inscris" href="/inscription-candidat.html">
                    Je m'inscris
                </a>
            </form>    </div>
    </div>

@endsection
@section('footer')

@endsection
