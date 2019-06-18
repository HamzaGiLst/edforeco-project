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

    protected function adminPanelLogin(){
        return view('admin.adminlogin');
    }

    protected function adminPanelFormation(){
        $edu = Formation::all();

        return view('admin.formation',compact('edu'));
    }
    protected function adminPanelCoaching(){
        $coach=Coaching::all();
        return view('admin.caoch',compact('coach'));
    }



    protected function adminLogin(Request $request){
        $user= $request->get('user');
        $pass=$request->get('password');

        if ($user=='admin' && $pass='123'){
            return redirect('/admin');
        } else{
            return redirect('/adminlogin');
        }





    }

    protected function deleteFormation($id){
        Formation::destroy($id);
        return redirect()->back();
    }

    protected function deleteCoach($id){
        Coaching::destroy($id);
        return redirect()->back();
    }

}
