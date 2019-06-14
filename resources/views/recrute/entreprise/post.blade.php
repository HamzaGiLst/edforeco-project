@extends('layouts.app')
@section('title','post job')
@section('header')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sl').hide();
        });
    </script>
    <style>
        select{
            font-size: 13px;
        }

        .sc img {
            width: 49px;position: relative;left: 165vh;
        }

    </style>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection
@section('content')
    <div class="container">
        <div class="card-body"><a href="/camp"><button class="btn btn-dark btn-block">Dashboard</button></a></div>
        <div class="card-body">
            <h1>Poster JOB</h1>
            <div class="row justify-content-xl">
                <div class="">
                    @if(count($errors)>0)

                        @foreach($errors->all() as $er)
                            <div class="alert alert-warning alert-dismissible">
                                {{$er}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    <div class="">
                        <form action="/postannonce" method="post" class="container">
                            @csrf
                            <div class="postf">
                                <label for="poste">Titre de Poste</label>
                                <input type="text" id="poste" name="job" placeholder="titre de poste" class="form-control">
                                <input type="hidden" name="entreprise" value="{{session()->get('companyId')->id}}" placeholder="le nom d'entreprise" class="form-control">
                                <label for="V">Ville</label>
                                <input type="text"  id="V" name="loca" placeholder="localisation" class="form-control">
                                <label for="eM">Email</label>
                                <input type="text" id="eM" name="email" placeholder="Email Addrese" class="form-control">
                                <select name="contrat" id="" class="custom-select" style="font-size: 15px;margin-top: 12px;">
                                    <option   >Type de contrat</option>
                                    <option   >CDI</option>
                                    <option   >CDD</option>
                                    <option   >Intérim</option>
                                    <option   >Anapec</option>
                                    <option   >Stage</option>
                                    <option   >Freelance</option>
                                </select>
                                <div class="d-inline" id="sl" style="">
                                    From <input type="text" name="starts" placeholder="Exemple 3000" class="form-control-sm">
                                    To <input type="text" name="ends" placeholder="exemple 10 000" class="form-control-sm">DH
                                </div>
                                <div class="select-box">
                                    <label for="">Secteur d'activité</label>
                                    <select name="per"  class="custom-select-sm" id="" style="font-size: 13px">
                                        @foreach($secteur as $s)
                                            <option>{{$s}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="md-form">

                                    <label for="">description d enterprise</label>
                                    <textarea id="editor" class="md-textarea form-control" rows="3" name="desc_company"></textarea>
                                </div>
                                <div class="md-form">
                                    <label for="">description de poste</label>
                                    <textarea name="desc_poste" id="editor" class="md-textarea form-control" rows="3"></textarea>
                                </div>

                                <div class="md-form">
                                    <label for="">profile recherche</label>
                                    <textarea id="editor" name="profil_needed" class="md-textarea form-control" rows="3"></textarea>
                                </div>
                                <div class="confirm">
                                    <button class="btn btn-danger">Preview</button>
                                    <input type="submit" value="confirm" class="btn btn-primary">

                                </div>
                                <div class="sc" style="">@include('inc.backtoTop')</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
