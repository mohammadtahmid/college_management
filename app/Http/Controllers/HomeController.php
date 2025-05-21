<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
use App\Models\Slider;
use App\Models\Faculties;
use Illuminate\Http\Request;
use App\Models\Infrastructure;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        $sliders = Slider::all();
        $infrastructure = Infrastructure::all();
        return view('home.index',compact('sliders','infrastructure'));
    }

    public function all_notices(){
        $notices = Notice::latest()->get();
        return view('home.notices',compact('notices'));
    }

    public function view_notice($id){
        $notice = Notice::findOrFail($id);
        return view('home.view_notice',compact('notice'));
    }



    //faculties
    public function view_faculties(){
        $faculties = Faculties::get();
        return view('home.faculties', compact('faculties'));

    }



    //course show diploma
    public function diploma(){
        $diploma = Course::where('type','diploma')->get();
        return view('home.diploma',compact('diploma'));
    }
    public function skil(){
        $skil = Course::where('type','RPL')->get();
        return view('home.skil',compact('skil'));
    }



}
