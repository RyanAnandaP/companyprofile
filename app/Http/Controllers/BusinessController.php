<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Business;
use Illuminate\Support\Facades\Validator;

class BusinessController extends Controller
{
    //
    public function send(Request $req){
        $validator = Validator::make($req->all(),[
            'name' => 'required|max:100|',
            'email' => 'required|email',
            'phone' => 'required',
            'about' => 'required|max:100',
            'captcha' => 'required|captcha'
        ]);
        if($validator->fails()){
            return response()->json([
                'error'=>$validator->errors()->all()
            ]);
        }
        $data = array('name'=>$req->name,'email'=>$req->email,'phone'=>$req->phone,'type'=>$req->type,'about'=>$req->topic);

        Mail::send('mail.business-application',$data, function($message) use ($data){
            $message->to('cs@in-sekuritas.com','Customer Service')->subject('Kerjasama');
            $message->from('investindosekuritas@gmail.com','Investindo');
        });
        
        $business = new Business;
        $business->name = $req->name;
        $business->email = $req->email;
        $business->phone = $req->phone;
        $business->type = $req->type;
        $business->about = $req->about;
        $business->status = 'active';
        $business->save();
        // dd($req);
        return response()->json('Selamat! Anda berhasil mengajukan kerjasama. Silahkan tunggu sampai CS kami menghubungi anda.');
    }
}
