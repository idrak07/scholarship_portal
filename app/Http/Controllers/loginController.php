<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    //
    public function login(Request $req){
    	if(count((array)DB::table('users')->where('email',$req->email)->where('password',$req->password)->first())>0){
    		$user = DB::table('users')->where('email',$req->email)->where('password',$req->password)->first();
            $req->session()->put('userid', $user->userid);
            $req->session()->put('status',$user->status );
            $req->session()->put('username', $user->username);
            if($user->status == 0){
            	return redirect()->route('student-index');
            }
            if($user->status == 1){
                return redirect()->route('university-index');
            }
            else{
            	return "False";
            }
            
    	}
        else{
    		$req->session()->flash('msg', 'Invalid Email address or Password');
    		return redirect()->route('signin');
    	}
    }
}
