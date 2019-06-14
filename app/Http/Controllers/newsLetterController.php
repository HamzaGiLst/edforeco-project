<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\NewsLetter;
use Illuminate\Http\Request;

class newsLetterController extends Controller
{
    protected function maillist(NewsletterRequest $request){
        //NewsLetter::all($request->all());
        $news= new NewsLetter;
        $news->email=$request->email;
        $news->save();
        return redirect()->back();
    }
}
