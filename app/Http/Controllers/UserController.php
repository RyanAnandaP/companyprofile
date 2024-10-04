<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //
    public function index(){
        if(auth()->user() != null){
            return view('profile');
        }else{
            return redirect('/login');
        }
    }
    public function start(){
        if(auth()->user() != null){
            if(auth()->user()->id_number == null){
                return view('start');
            }else if(auth()->user()->occupation == null){
                return view('occupation');
            }else if(auth()->user()->account_number == null){
                return view('bank');
            }else if(auth()->user()->revenue){
                return view('income');
            }else if(auth()->user()->parner_name == null){
                return view('parent');
            }else{
                return view('');
            }
        }else{
            return redirect('/login');
        }
    }
    public function add_personal_data(Request $req){
        // validation
        // add to database
        return redirect('/start-trading');
    }
}
