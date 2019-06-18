@extends('layouts.app')
@section('header')

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>

    </style>
@endsection
@section('content')
    <div id="container">
        @if(session()->get('message'))
            <?php
            echo session()->get('message');
            ?>
        @endif

        <form action="/loginCondidat" method="post">
            @csrf

            <label for="name">Username:</label>

            <input type="name" name="user" focus required>

            <label for="username">Password:</label>

            <p><a href="#">Forgot your password?</a>

                <input type="password" name="password" focus required>

            <div id="lower">

                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>

                <input type="submit" value="Login">

            </div>

        </form>

    </div>
@endsection