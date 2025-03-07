<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Page;
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
        $arr['services'] = Service::limit(4)->get();
        $arr['projects'] = Project::limit(4)->get();
        $arr['team'] = Team::limit(3)->get();
        $arr['faqs'] = Faq::limit(8)->get();
        $arr['counters'] = Counter::all();
        

        return view('website.home',$arr);
    }

    public function page($lang,$id){
        $arr['page'] = Page::where('id', $id)->first();
        
        return view('website.page', $arr);
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
        $arr['service'] = Service::where('id',$id)->with(['subServices','projects'])->first();
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
    public function faqs(){
        $arr['faqs'] = Faq::get();
        return view('website.faqs',$arr);
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
