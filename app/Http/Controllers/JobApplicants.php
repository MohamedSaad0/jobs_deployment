<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Apply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Http\Resources\ApplyResource;
class JobApplicants extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Store job applicants
    public function store(Request $request)
    {
        $job = new Apply();
        $job->user_id=$request->user_id;
        $job->job_id=$request->job_id;
        $job->current_salary=$request->current_salary;
        $job->expected_salary=$request->expected_salary;
        //CV upload
        if($request->hasFile('cv')){
            $compliteFileName = $request->file('cv')->getClientOriginalName();
            $filaNameOnly = pathinfo($compliteFileName , PATHINFO_FILENAME);
            $extension = $request->file('cv')->getClientOriginalExtension();
            $comPic = str_replace(' ' , '_' , $filaNameOnly).'-'.rand() . '_'.time(). '.'.$extension;
            $path = $request->file('cv')->storeAs('public/cvs' , $comPic);
            $job->cv=$comPic;
        }
        $job->save();
        return response(["You have applied successfully",$comPic]);
    }

    public function show(){
        // $job = ApplyResource::collection(Apply::all());
        // dd($job);
        $job = Apply::all();
        return view('jobs.applicants', ['job'=>$job]);
    }

    public function viewPdf($cv){
        // echo asset('storage/cvs/');
        $path = storage_path('app/public/cvs/'.$cv);
        return response()->file($path);
    }

}


