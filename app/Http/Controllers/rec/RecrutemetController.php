<?php

namespace App\Http\Controllers\rec;

use App\Annonce;
use Illuminate\Httprequest;
use App\Http\Controllers\Controller;

class RecrutemetController extends Controller
{
    //
    protected function post_annoce(){
        $post= new Annonce ;
        $post->job = request('job');
        $post->entreprise = request('entreprise');
        $post->localization = request('loca');
        $post->email =request('email');
        $post->type_contrat =request('contrat');
        $post->startsalary=request('starts');
        $post->endsalary=request('ends');
        $post->per_temp=request('per');
        $post->describe_entreprise=request('desc_company');
        $post->describe_poste=request('desc_poste');
        $post->profil_recherche=request('profil_needed');
        $post->dure_poste=request('temp');
        $post->save();
        return redirect('/p');

    }
}
