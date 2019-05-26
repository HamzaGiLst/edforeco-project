<?php

namespace App\Http\Controllers;

use App\Coaching;
use App\Formation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    /**
     *
     */
    protected function traiter_formation(){
        $edu = Formation::all();
        return view('admin.dashboard',compact('edu'));
    }
    protected function traite_coaching(){
        $coach = Coaching::all();
        return view('admin.coach',compact('coach'));
    }
}
