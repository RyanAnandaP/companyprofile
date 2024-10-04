<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Report;
use App\Project;

class DownloadController extends Controller
{
    //
    public function download($type,$when){
        if($type == 'laporankeuangan'){
            $report = Report::where('year',$when)->first();
            $file = public_path()."/downloads/".$report->file;

            $headers = [
                'Content-Type' => 'application/pdf'
            ];

            return response()->download($file,'laporan_keuangan_investindo_'.$when.'.pdf',$headers);
        }
    }
    public function download_invite(){
        $file = public_path()."/downloads/INvite.zip";
        $headers = [
            'Content-Type'=>'application/octet-stream'
        ];
        return response()->download($file,'invite.zip',$headers);
    }
    public function upload(Request $req, $type){
        // dd('test');
        if($type == 'laporankeuangan'){
            $file = $req->file;
            $report = Report::find($req->id);
            $report->file = 'lk_'.$report->year.'.'.$file->getClientOriginalExtension();
            $report->save();
            $file->move(public_path().'/downloads/','lk_'.$report->year.'.'.$file->getClientOriginalExtension());
        }else if($type == 'project'){
            $logo = $req->logo;
            $award = $req->award;
            $project = new Project;
            $project->name = $req->name;
            $project->code = $req->code;
            $project->logo = $req->code.'.'.$logo->getClientOriginalExtension();
            $project->award = 'award_'.$req->code.'.'.$award->getClientOriginalExtension();
            $project->description = $req->description;
            $project->status = 'active';
            $project->save();
            $logo->move(public_path().'/images/', $req->code.'.'.$logo->getClientOriginalExtension());
            $award->move(public_path().'/images/', 'award_'.$req->code.'.'.$award->getClientOriginalExtension());
            
        }
        return back();
    }

    public function delete(Request $req, $type){
        if($type == 'laporankeuangan'){
            $report = Report::find($req->id);
            Storage::delete(public_path().'/downloads/'.$report->file);
            $report->file = null;
            $report->save();
        }else if($type == 'project'){
            $project = Project::find($req->id);
            Storage::delete(public_path().'/images/'.$project->logo);
            Storage::delete(public_path().'/images/'.$project->award);
            $project->logo = null;
            $project->award = null;
            $project->save();
        }
        return back();
    }
}
