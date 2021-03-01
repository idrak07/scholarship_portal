<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    //
    public function Index()
    {
    	$scholarships=DB::table('scholarships')->orderby('scholarshipid','desc')
		    	->get();
    	
    	// return $scholarships;
    	return view('index' ,['scholarships' => $scholarships]);
    }
    public function aboutus()
    {
        $scholarships=DB::table('scholarships')
                ->get();
        
        // return $scholarships;
        return view('aboutus' ,['scholarships' => $scholarships]);
    }
    public function feedback(Request $req)
    {
        # code...
        $data= $req->all();
        return ;
    }
    public function getSearchedScholarship(Request $req)
    {
        if($req->degreeType != 1){
           $scholarships=DB::table('scholarships')
                    ->where('degreeType',$req->degreeType)
                    ->get();
            $degree=$req->degreeType;            
            return view('search' ,['scholarships' => $scholarships,'degree'=>$degree]); 
        }
        else{
            return "Nothing";
        }
    }
    public function getUniversityName(Request $request){
      $search = $request->search;

      if($search == ''){
         $universityname = DB::table('universities')->orderby('universityname','asc')->select('universityname')->limit(5)->get();
      }else{
         $universityname = DB::table('universities')->orderby('universityname','asc')->select('universityname')->where('universityname', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($universityname as $universityname){
         $response[] = array("value"=>$universityname->universityname);
      }

      return response()->json($response);
   }
    public function getScholarship(Request $req)
    {
    	if(count((array)DB::table('scholarships')->where('scholarshipid',$req->id)->first())>0)
    	{
    		$scholarship= DB::table('scholarships')->where('scholarshipid',$req->id)->first();
    		return view('scholarship',['scholarship'=>$scholarship]);
    	}
    	else
    		return "False Scholarship No ";
    }
    public function createUniversity()
    {
        # code...
        return view('createUniversity');
    }
    public function insertUniversity(Request $req)
    {
        DB::table('users')->insert([
            'username' => $req->abcd,
            'email' => $req->email,
            'password' => $req->password,
            'status' => 1
        ]);
        $userid= DB::table('users')->where('email',$req->email)->where('password',$req->password)->value('userid');
        DB::table('universities')->insert([
            'universityname' => $req->universityname,
            'userid' => $userid,
            'country' => $req->country,
            'city' => $req->city,
            'state' => $req->state,
            'zip' => $req->zip,
            'contact' => $req->contact
        ]);
        $req->session()->put('userid', $userid);
        $req->session()->put('status',1 );
        $req->session()->put('username', $req->abcd);
        return redirect()->route('university-index');
    }
    public function createaccount()
    {
        # code...
        return view('selectAccount');
    }
    public function createStudent()
    {
        # code...
        return view('createAccount');
    }
    public function signin()
    {
        # code...
        $errmsg="";
        return view('signin',['errmsg'=>$errmsg]);
    }
}
