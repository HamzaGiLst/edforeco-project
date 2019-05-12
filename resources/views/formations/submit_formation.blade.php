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

                if (opt.text == "express votre besoin"){
                    $('#bb').show();
                }else {$('#bb').hide();}
            });



        });
    </script>
@endsection
<div class="container">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="form-group row"><label for="enter" class="col-form-label text-md-right">Entreprise</label>
                <input type="text" class="form-control" name="entreprise" id="enter" placeholder="le nom d'entreprise">
            </div>
            <div class="form-group row"><label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="  ">
            </div>
            <div class="form-group row"><label for="tel">Telephone</label>
                <input type="text" class="form-control" name="phone" id="tel" placeholder=" ">
            </div>
            <label for="formation">formation</label><select name="" id="formation" class="form-control">
                <option value="">Choisir Formation</option>
                <option value="">medcine</option>
                <option value="">top</option>
                <option value="">gb</option>
                <option value="">informatique</option>
                <option value="">express votre besoin</option>

            </select>
            <div class="form-group row" id='bb'><label for="b">besoin</label>
                <input type="text" class="form-control" name="besoinf" id="b" placeholder=" ">
            </div>
            <div class="form-group row"><label for="sms">note</label>
                <input type="text" class="form-control" name="sms" id="sms" placeholder=" ">
            </div>
            <input type="button" value="Order Formation" class="btn btn-primary">

        </form>
    </div>
</div>
