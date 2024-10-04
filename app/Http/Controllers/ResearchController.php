<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;

class ResearchController extends Controller
{
    //
    public function index(){
        $summaries = Summary::orderBy('created_at','desc')->take(5)->get();
        $weeklies = Summary::where('type','weekly')->orderBy('created_at','desc')->take(5)->get();
        $dailies = Summary::where('type','daily')->orderBy('created_at','desc')->take(5)->get();
        $monthlies = Summary::where('type','monthly')->orderBy('created_at','desc')->take(5)->get();
        return view('research')->with('summaries',$summaries)->with('weeklies',$weeklies)->with('dailies',$dailies)->with('monthlies',$monthlies);
    }
}
