@extends('layouts.app')

@section('title','Job Details')
@section('header')
    <style>
        .applyForm{
            position: relative;
            margin-top: 3rem;
            margin-left: 4rem;
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
    </style>
@endsection
@section('content')
    {{$_job->job}}
    <div class="card" style="height: 10rem;width: 900px">
        <div class="body-card">
            <div class="applyForm">
                <div class="form-inline">
                    <form action="/sendDemandeJob" class="applyForm1">
                        <input type="submit" value="Postuler" >
                    </form>
                    <form action="" class="applyForm2">
                        <input type="submit" value="Save jobs" >
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="jobDetails">
        {{$_job->describe_poste}}
    </div>

@endsection