<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $arr['services'] = Service::all();

        return view('website.home',$arr);
    }

    public function about(){

        return view('website.about');
    }
    public function team(){
        
        return view('website.team');
    }
    public function services(){
        $arr['services'] = Service::all();
        return view('website.services',$arr);
    }
    public function one_service($id){
        $arr['service'] = Service::where('id',$id)->with(['subServices','projects.images'])->first();
        return view('website.service',$arr);
    }
    public function projects(){
        $arr['projects'] = Project::with(['service'])->get();
        
        return view('website.projects',$arr);
    }
    public function one_project($id){
        $arr['project'] = Project::with(['service', 'images'])->where('id', $id)->first();
        return view('website.project', $arr);
    }
    public function contactus(){
        return view('website.contactus');
    }
    public function do_logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
