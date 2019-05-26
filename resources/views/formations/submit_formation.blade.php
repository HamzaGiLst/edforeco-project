@extends('layouts.app')
@section('title' ,'demane un formation')
@section('header')
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
@endsection
@section('content')
    <div class="container">
        @if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $er)
                    {{$er}}
                    <hr>
                @endforeach

            </div>
        @endif
        <div class="col-md-6">
            <form method="post" action="/submit" >
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
                <input type="submit" value="Order Formation" class="btn btn-primary">

            </form>
        </div>

    </div>
    
@endsection
