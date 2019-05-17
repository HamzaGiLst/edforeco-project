<?php

namespace App\Http\Controllers\coach;

use App\Coaching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoachingController extends Controller
{
    //
    protected function index(){
        return view('coaching.submit_coach');
    }

    protected function open_case(){
        $demand =new Coaching;
        $demand->name = request('name');
        $demand->email = request('email');
        $demand->phone =request('tel');
        $demand->besoin = request('besoin');
        $demand->save();
        return redirect('/coaching');
    }
}
