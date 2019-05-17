@extends("layouts.app")
@section('title','Coaching')

@section('content')
    <div class="coach_form">
        <form action="/store" method="post">
            {{ csrf_field() }}
            <div class="group-control">
                <label for="one">nom ou entreprise</label>
                <input type="text" name="name" class="form-control" placeholder="organization">
            </div>
            <div class="group-control">
                <label for="two">email</label>
                <input type="email" name="email" class="form-control" id="two">
            </div>
            <div class="group-control">
                <label for="tree">Telephone</label>
                <input type="text" name="tel" id="tree" class="form-control">
            </div>
            <div class="group-control">
                <label for="for">Description de votre besoin</label>
                <input type="text" name="besoin" id="for" class="form-control" >
            </div>
            <input type="submit" value="Envoyer" class="btn badge-secondary">
        </form>
    </div>
@endsection