@extends('layouts.app')
@section('title','post job')

@section('content')
    <div class="post_box">
        <h1>Poster JOB</h1>
        <form action="/postannonce" method="post" class="container">
            @csrf
            <div class="postf">
                <input type="text" name="job" placeholder="titre de poste" class="form-control">
                <input type="text" name="entreprise" placeholder="le nom d'entreprise" class="form-control">
                <input type="text" name="loca" placeholder="localisation" class="form-control">
                <input type="text" name="email" placeholder="Email Addrese" class="form-control">
                <select name="contrat" id="" class="custom-select">
                    <option value="">Type de contrat</option>
                    <option value="">CDI</option>
                    <option value="">CDD</option>
                    <option value="">Intérim</option>
                    <option value="">Anapec</option>
                    <option value="">Stage</option>
                    <option value="">Freelance</option>
                </select>
                <div class="form-contrl">
                    From <input type="text" name="starts" placeholder="Exemple 3000" class="form-control-sm">
                    To <input type="text" name="ends" placeholder="exemple 10 000" class="form-control-sm">DH
                    <select name="per" class="custom-select-sm" id="">
                        <option value="">par mois</option>
                        <option value="">par semaine</option>
                        <option value="">par jour</option>
                    </select>
                </div>

                <div class="md-form">

                    <label for="">description d enterprise</label>
                    <textarea id="" class="md-textarea form-control" rows="3" name="desc_company"></textarea>
                </div>
                <div class="md-form">
                    <label for="">description de poste</label>
                    <textarea name="desc_poste" id="" class="md-textarea form-control" rows="3"></textarea>
                </div>

                <div class="md-form">
                    <label for="">profile recherche</label>
                    <textarea id="" name="profil_needed" class="md-textarea form-control" rows="3"></textarea>
                </div>

                <input type="number" name="temp" placeholder="Duree de poste per jour" class="form-control">

                <div class="confirm">
                    <button class="btn btn-danger">Preview</button>
                    <input type="submit" value="confirm" class="btn btn-primary">

                </div>
            </div>
        </form>
    </div>
@endsection