<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Slider;
use App\Models\Faculties;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        $sliders = Slider::all();
        return view('home.index',compact('sliders'));
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



}
