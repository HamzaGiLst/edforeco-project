<?php

namespace App\Http\Controllers\coach;

use App\Coaching;
use App\Http\Requests\CoachRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoachingController extends Controller
{
    //
    protected function index(){
        return view('coaching.submit_coach');
    }

    protected function open_case(CoachRequest $request){
        $demand =new Coaching;
        $demand->name = $request->name;
        $demand->email = request('email');
        $demand->phone =request('tel');
        $demand->besoin = request('besoin');
        $demand->save();
        $notif=<<<DILEMETER
        <div class="alert alert-success" role="alert">
        added successeflyy
</div>
DILEMETER;
          echo $notif;
        return redirect('/coaching');
    }
}
