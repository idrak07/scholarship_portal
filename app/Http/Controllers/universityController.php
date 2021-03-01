<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class universityController extends Controller
{
    //
    public function index(Request $req)
    {
    	$universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        $name= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityname');
    	$offered= DB::table('scholarships')->where('universityid',$universityid)->orderBy('deadline', 'desc')->get();
    	return view('university.index',['scholarships'=>$offered, 'universityname'=>$name]);
    	// return $offered;
    }
    public function getStudents(Request $req)
    {
    	$students= DB::table('students')
        ->join('applicants', function ($join) use ($req) {
            $join->on('students.studentid', '=', 'applicants.studentid')
                 ->where('applicants.scholarshipid','=', $req->scholarshipid);
        })
        ->get();
        $headline= DB::table('scholarships')->where('scholarshipid',$req->scholarshipid)->value('headline');
        return view('university.students',['students'=>$students,'headline'=>$headline,'scholarshipid'=>$req->scholarshipid]);
    }
    public function studentAction(Request $req)
    {
    	# code...
    	return $req->studentid;
    }
    public function newScholarship()
    {
    	# code...
    	return view('university.newScholarship');
    }
    public function newScholarshipPost(Request $req)
    {
        # code...
        $universityid= DB::table('universities')->where('userid',$req->session()->get('userid'))->value('universityid');
        DB::table('Scholarships')->insert([
                            'universityid'=> $universityid,
                            'headline'=> $req->headline,
                            'degreetype' => $req->degreetype,
                            'costing' => $req->costing,
                            'postingdate' => date('Y-m-d'),
                            'deadline' => $req->deadline,
                            'startingdate' => $req->startingdate,
                            'details' => $req->details,
                            'eligibility' => $req->eligibility,
                            'benefits' => $req->benefits,
                            'web' => $req->web,
                            'image' => 'a',
                            'application' => $req->application,
                            'removed' => 3
                        ]);
        return redirect('/university');
    }
    public function profile(Request $req)
    {
        $university= DB::table('universities')->where('userid',$req->session()->get('userid'))->first();
        $email=DB::table('users')->where('userid',$req->session()->get('userid'))->value('email');
        return view('university.profile',['university'=>$university,'email'=>$email]);
        // return $university;
    }
}
