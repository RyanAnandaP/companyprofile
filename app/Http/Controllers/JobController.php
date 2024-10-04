<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Description;
use App\Qualification;
use Mail;
use App\Mail\NewJobApplicationMail;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    //
    public function index(){
        $jobs = Job::where('status','active')->get();
        // dd($jobs[0]->descriptions);
        return view('career')->with('jobs',$jobs);
        // return response()->json($jobs);
    }

    public function daftar(Request $req){
        $job = Job::find($req->kc);
        return view('daftar-kerja')->with('job',$job);
    }
    public function refreshCaptcha(){
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function apply(Request $req){

        $validator = Validator::make($req->all(),[
            'name' => 'required|max:100|',
            'email' => 'required|email',
            'phone' => 'required',
            'job' => 'required',
            'position' => 'required',
            'cv' => 'required|mimes:pdf|max:2000',
            'photo' => 'required|mimes:jpg,jpeg|max:1000',
            'captcha' => 'required|captcha'
        ]);

        // return response()->json(['error'=>$validate]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors()->all()
            ]);
        }

        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $job = $req->job;
        $position = $req->position;
        $cv = $req->cv;
        $photo = $req->photo;



        $data = array('name'=>$name,'email'=>$email,'phone'=>$phone,'job'=>$job,'position'=>$position,'cv'=>$cv,'photo'=>$photo);

        Mail::send('mail.new-job-application',$data, function($message) use ($data){

            $message->to('melda@in-sekuritas.com','Bu Melda')->subject('Apply Job')->attach($data['cv']->getRealPath(),[
                'as' => 'cv_'.$data['name'].'_'.$data['job'].'_'.$data['position'].'.'.$data['cv']->getClientOriginalExtension(),
                'mime' => $data['cv']->getMimeType()
            ])->attach($data['photo']->getRealPath(),[
                'as' => 'photo_'.$data['name'].'_'.$data['job'].'_'.$data['position'].'.'.$data['photo']->getClientOriginalExtension(),
                'mime' => $data['photo']->getMimeType()
            ]);
            $message->from('investindosekuritas@gmail.com','Investindo');
        });
        return response()->json('Anda telah berhasil mendaftar!');
    }
}
