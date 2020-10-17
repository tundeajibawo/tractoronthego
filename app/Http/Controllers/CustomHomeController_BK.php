<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\User;
use App\Farmer;
use App\Operator;
use App\Agent;
use App\Local_government;
use App\State;

class CustomHomeController extends Controller
{
	protected $redirect = '/';
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

			$farm_cluster  = User::where('id', Auth::user()->id);

			$farmertitle = "Farmer";
			$operator		=	"Operator";
			$agent_code	=	"Agent";
    	return view('home')->with('farm_cluster', $farm_cluster);
    }


    public function lga($id)
    {
        $localgov = Local_government::where('state_id', $id)->pluck('name');

       return $localgov;


    }

    public function stateid($id)
    {
        $stateidap = State::where('id', $id)->pluck('name');

       return $stateidap;


    }

    public function state()
    {

        $state = State::all();
       return $state;


    }

    public function user_profile()
    {
			$farmers = Farmer::where('id', Auth::user()->id);
			 return view('userdashboard.userprofile');
    }

		public function joincluster($email)
		{
			$farm_cluster = User::find($email);
			 return view('userdashboard.join_cluster')->with('cluster', $farm_cluster);
		}




        public function profile_edit($id)
        {
            $user  =  User::find($id);
          return view('userdashboard.userprofile')->with('user', $user);

}

    public function logoutUser()
    {
    	Auth::guard('user')->logout();
 			Session::flush();
    	return redirect('/login');
    }
}
