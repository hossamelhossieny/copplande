<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){        
        $arr['aboutSection'] = AboutSection::all();

        return view('website.home',$arr);
    }

    public function about(){

        $aboutSection = AboutSection::all();
        return view('website.about', compact('aboutSection'));
    }
  
    public function services(){
        $arr['services'] = Service::all();

        return view('website.services',$arr);
    }
    public function one_service($lang,$id){
        $arr['service'] = Service::where('id',$id)->with(['subServices','projects.images'])->first();
        return view('website.service',$arr);
    }
    public function projects(){
        $arr['projects'] = Project::with(['service'])->get();
        
        return view('website.projects',$arr);
    }
    public function one_project($lang,$id){        
        $arr['project'] = Project::with(['service'])->where('id', $id)->first();
        
        return view('website.project', $arr);
    }

    public function team(){        
        $arr['team'] = Team::get();
        
        return view('website.team', $arr);
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
