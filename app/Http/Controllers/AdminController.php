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
    protected function adminPanel(){
        $edu = Formation::all();
        $coach=Coaching::all();
        return view('admin.dashboard',compact('edu','coach'));
    }


    protected function adminPanelFormation(){
        $edu = Formation::all();

        return view('admin.formation',compact('edu'));
    }
    protected function adminPanelCoaching(){
        $coach=Coaching::all();
        return view('admin.caoch',compact('coach'));
    }

}
