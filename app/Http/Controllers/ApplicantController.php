<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    //
    public function index() {
        $applicants = DB::table('applicants')->get();
 
   
        return view('index', ['applicants'=>$applicants]);
    }

    public function edit(Request $request) {
        $data = $request->input();

        $user = Applicant::find($data['id']);
        
        return view('update',['edit_id' => $user]);
    }

    public function update(Request $request) {

        
        $data = $request->input();

        $update_user = Applicant::find($data['id']);

        $update_user->first_name = $data['first_name'];
        $update_user->middle_name = $data['middle_name'];
        $update_user->last_name = $data['last_name'];
        $update_user->birth_date = $data['birth_date'];
        $update_user->gender = $data['gender'];
        $update_user->cellphone_no = $data['cellphone_number'];
        $update_user->address = $data['address'];


        $update_user->save();

       
        
        $applicants = DB::table('applicants')->get();
        

        return view('index', ['applicants'=>$applicants]);  
    }

    public function delete(Request $request) {
        $delete_id = $request->input();

        
            $user = Applicant::find($delete_id['id']);
        
        if($user != null) {
            $user->delete();

        }
        $applicants = DB::table('applicants')->get();
        

        return view('index', ['applicants'=>$applicants]);       
    }

    public function store(Request $request) {

        

        $applicant = new Applicant;

        $applicant->first_name = $request->first_name ?? '';
        $applicant->middle_name = $request->middle_name ?? '';
        $applicant->last_name = $request->last_name ?? '';
        $applicant->birth_date = $request->birth_date ?? 1900-00-00;
        $applicant->gender = $request->gender ?? '';
        $applicant->cellphone_no = $request->cellphone_number ?? '';
        $applicant->address = $request->address ?? '';
        

        $applicant->save();
        

        $applicants = DB::table('applicants')->get();

        return view('index', ['applicants'=>$applicants]);     
    }
}
