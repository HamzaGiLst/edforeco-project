<?php

namespace App\Http\Controllers\rec;

use App\Annonce;
use App\Mail\demandJob;
use Illuminate\Httprequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RecrutemetController extends Controller
{
    //store in database
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
//////////les offres disponible after search process
    protected function offre(){
        $posts = Annonce::simplePaginate(4);
        return view('recrute.index',compact('posts'));
    }

    ///////////poste un annonce
    protected function post_page(){
        return view('recrute.entreprise.post');
    }
     ////postuler

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function postuler(){
        $_job=Annonce::findOrFail(request('id'));
        return view('recrute.postuler',compact('_job'));
    }

    protected function sendDemendEmploi(){
        Mail::to($this)->send(new demandJob());
    }
}
