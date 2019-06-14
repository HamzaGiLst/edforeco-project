<?php
//this controller for condidats
namespace App\Http\Controllers\rec;

use App\Condidat;
use App\Http\Requests\CondidatAccountRequest;
use App\SaveAnnonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{

    protected function profile(){
        $condidat=Condidat::findOrFail(1);
        //$annoncesaved=SaveAnnonce::where('condidat_id',1);
        $annoncesaved=$data = DB::select('select * from save_annonces where condidat_id = 1');;
        //dd($condidat);
        //dd($annoncesaved);
        return view('profiles.condidat.dashboard',compact('condidat','annoncesaved'));

    }

    public function index()
    {
        return view('profiles.condidat.register');
    }



    public function store(CondidatAccountRequest $request)
    {
        if($request->hasFile('cv')){
            $path=$request->file('cv')->store('Uploads/cvs');
            //echo $path;
            $condidat = new Condidat;
            $condidat->nom=$request->nom;
            $condidat->prenom=$request->prenom;
            $condidat->email=$request->email;
            $condidat->password=$request->password;
            $condidat->cv=$path;
            $condidat->save();
            print_r($request->all());
            $id=Condidat::where('email','like',$request->email);
            return redirect("condidats/{$condidat->id}");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condidat=Condidat::findOrFail($id);
        //$annoncesaved=SaveAnnonce::where('condidat_id',1);
        $annoncesaved=$data = DB::select('select * from save_annonces where condidat_id = ?' ,[$id]);;
        //dd($condidat);
        //dd($annoncesaved);
        return view('profiles.condidat.dashboard',compact('condidat','annoncesaved'));
    }


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
     ////login to profile
    protected function login_index(){
        return view('profiles.condidat.login');
    }

    protected function login(Request $request){

        $userCondidat=$request->get('email');
        $pass=$request->get('password');

        $checkUser=Condidat::selectRaw('count(*) as Total')->where('email','=',$userCondidat)->first();
        $getPassword=Condidat::select('password')->where('email','=',$userCondidat)->first();

        echo $checkUser;
        echo $getPassword;
        if (intval($checkUser->Total)>0){
            $getPassord=Condidat::select('password')->where('email','=',$userCondidat)->first();
            $getCondidatId=Condidat::select('id')->where('email','=',$userCondidat)->first();
            if (hash_equals($pass,$getPassord->password)){
                $request->session()->put('CondidatId',$getCondidatId);
                echo "dkdd";
                return session()->all();
            }else{
                return 'password fals';
            }
        }else {
            return 'problem to access to if condition ';
            //return redirect('/condidat/login');
        }

    }
}
