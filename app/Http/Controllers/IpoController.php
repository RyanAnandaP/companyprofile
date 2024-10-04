<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class IpoController extends Controller
{
    public function view($code){
        $project = Project::where('code',$code)->first();
        return view('project')->with('project',$project);
    }
}
