@extends('layouts.app')
@section('title','got tot it itn')

@section('content')
    <div class="search_offre">
        <div class="box">
            <form action="" method="get" class="bg-success">
                <input type="text" name="key" placeholder="poste ou entreprise" class="">
                <input type="text" name="where" class="">
                <input type="submit" value="search">
            </form>
        </div>
    </div>
@endsection