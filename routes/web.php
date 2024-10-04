<?php
use App\Events\MessagingEvent;
use App\Project;
use App\Report;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/input-ipo','IpoController@input');

Route::get('/career','JobController@index');

Route::post('/daftar-kerja','JobController@daftar');
Route::post('/apply-job','JobController@apply');

Route::get('/product',function(){
    return view('product');
});
Route::get('/equity',function(){
    return view('brokerage');
});
Route::get('/brokerage',function(){
    return view('equity');
});
Route::get('/investmentbanking',function(){
    $projects = Project::orderBy('year','desc')->where('type','lead')->get();
    $join = Project::orderBy('year','desc')->where('type','join')->get();
    return view('investmentbanking')->with('projects',$projects)->with('join',$join);
});

Route::get('/companyprofile',function(){
    return view('companyprofile');
});

Route::get('/corporategovernance',function(){
    // $reports = Report::all();
    // return view('perusahaan')->with('reports',$reports);
    return view('corporategovernance');
});

Route::get('/download/{type}/{when}','DownloadController@download');

// captcha
Route::get('createcaptcha', 'CaptchaController@create');
// Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'JobController@refreshCaptcha');

Route::get('download_invite','DownloadController@download_invite');

Route::get('/research','ResearchController@index');