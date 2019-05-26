<?php

namespace App\Http\Controllers\edu;


use App\Formation;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormationRequest;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
class FormationController extends Controller
{
    //

    /**
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data,[
            'enterprise'=> ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15'],
            'formation'=>['required', 'string', 'max:255'],

        ]);
    }

    

    protected function index(){
        return view('formations.submit_formation');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function submit(FormationRequest $request){
       // Formation::create($request->all());
        if (!$request->besoinf){
            $request->besoinf='new assignment';
        }

               $formation = new Formation;
               $formation->entreprise =  $request->entreprise;
               $formation->email=request('email');
               $formation->phone=request('phone');
               $formation->formation=request('choix_formation');
                //$formation->formation=$_POST['choix_formation'];
               $formation->besoin=$request->besoinf;
               $formation->note=request('sms');
               $formation->save();
         return redirect('/formation');
    }

    protected function store(Request $requist){
        Formation::create($requist->all());
        return 'good';
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function list_demande(){
        $demande = Formation::all();
        return view('admin.index',compact('demande'));
    }
}
