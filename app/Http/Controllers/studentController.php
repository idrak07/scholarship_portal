<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$scholarships=DB::table('scholarships')
		    	->get();
    	
    	// return $scholarships;
    	return view('student.index' ,['scholarships' => $scholarships]);
    	// return view('university.index');
    }
    public function getScholarship(Request $req)
    {
        if(count((array)DB::table('scholarships')->where('scholarshipid',$req->id)->first())>0)
        {
            $scholarship= DB::table('scholarships')->where('scholarshipid',$req->id)->first();
            return view('student.scholarship',['scholarship'=>$scholarship]);
        }
        else
            return "False Scholarship No ";
    }
    public function aboutus()
    {
        $scholarships=DB::table('scholarships')
                ->get();
        
        // return $scholarships;
        return view('student.aboutus' ,['scholarships' => $scholarships]);
    }
}
