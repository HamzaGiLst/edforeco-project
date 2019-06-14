<?php

namespace App\Http\Controllers\rec;

use App\Annonce;
use App\Enterprise;
use Composer\Autoload\ClassLoader;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Session;

class ProfilecompanyController extends Controller
{
    //protected $redirectTo = '/camp';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profiles.company.cregister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->password=Hash::make($request->password);
        //echo $request->password;
        Enterprise::create($request->all());
       // Enterprise::create(['country' => $request->country]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=\App\Annonce::all();

        return view('profiles.company.cdashboard',compact('post'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    use AuthenticatesUsers;

    protected function login(Request $request){
        $user= $request->get('user');
        $pass=$request->get('password');



        $checkuser=Enterprise::selectRaw("count(*) as Total")->where('email','=',$user)->first();
        if (intval($checkuser->Total)>0){
            $getpassword=Enterprise::select('password')->where('email','=',$user)->first();
            $getCompanyId=Enterprise::select('id')->where('email','=',$user)->first();
            if (hash_equals($pass,$getpassword->password)){

                $request->session()->put('userComp', $user);
                $request->session()->put('companyId', $getCompanyId);
                $request->session()->put('status','logcompany');

                //return session()->all();
                return redirect('/camp');
            }else{
                return 'password false';
            }
        }else{
            return redirect('/log');
        }


    }

    protected function loggedOut(Request $request)
    {
        $request->session()->flush();
        return redirect('/rhome');
    }

    protected function deleteAnnonce($id){
        Annonce::destroy($id);
        return redirect('/camp');
    }
}
