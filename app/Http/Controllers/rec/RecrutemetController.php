<?php

namespace App\Http\Controllers\rec;

use App\Annonce;
use App\Condidat;
use App\Enterprise;
use App\Http\Requests\AnnonceRequest;
use App\Mail\demandJob;
use Illuminate\Http\Request;
use Illuminate\Httprequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class RecrutemetController extends Controller
{
    //store in database
    protected function post_annoce(AnnonceRequest $request){

        $post= new Annonce ;
        $post->job = $request->job;
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
        $post->save();
        return redirect('/p');
    }
    ////show job offres with conditions
    protected function showJobs(Request $request){
        $key=request('key');
        $where=request('where');
        if ($request->has('key')){
            if ($request->has('where')){
                $posts = Annonce::where('job','like','%'.$key.'%')->orWhere('entreprise','like','%'.$key.'%')
                    ->where('localization','like','%'.$where.'%')
                    ->paginate(4)
                ;
                return view('recrute.index',compact('posts'));
            }
        }




    }
#tout les offres
    protected function offre(){
        $posts = Annonce::simplePaginate(4);
        return view('recrute.index',compact('posts'));
    }

    ///////////poste un annonce
    protected function post_page(){
        return view('recrute.entreprise.post');
    }
     ////postuler

    protected function postuler($id){
        $_job=Annonce::findOrFail($id);
        return view('recrute.postuler',compact('_job'));
    }

    #recrutement home
    protected function searchoffre(){
        $offre=Annonce::all()->count();
        $recruteur=Enterprise::all()->count();
        $chercheur=Condidat::all()->count();
        return view('recrute.entreprise.recruteHome',compact('offre','recruteur','chercheur'));
    }




    #mailing function
    protected function sendDemendEmploi(){
        Mail::to($this)->send(new demandJob());
    }
}
