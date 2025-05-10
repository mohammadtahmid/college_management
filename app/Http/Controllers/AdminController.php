<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Slider;
use App\Models\Faculties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function view_notice(){
        $data = Notice::all();
        return view('admin.notice',compact('data'));
    }

    public function add_notice(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'massage'=> 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $notice = new Notice;

        $notice->title = $request->title;
        $notice->massage = $request->massage;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('notices', 'public');
            $notice->image = $imagePath;
        }

        $notice->save();
        flash()->success('Notice created successfully!');
        return redirect()->back();
    }


    public function delete_notice($id){
        $notice = Notice::findOrFail($id);

        if($notice->image && Storage::disk('public')->exists($notice->image)){
            Storage::disk('public')->delete($notice->image);
        }

        $notice->delete();
        flash()->error('Notice Deleted successfully!');
        return redirect()->back();
    }


    public function edit_notice($id) {
        $notice = Notice::findOrFail($id);
        return view('admin.edit_notice', compact('notice'));
    }

    public function update_notice(Request $request, $id){
        $request->validate([
            'title' => 'required|string|max:255',
            'massage' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $notice = Notice::findOrFail($id);
        $notice->title = $request->title;
        $notice->massage = $request->massage;

        if ($request->hasFile('image')) {
            if ($notice->image && Storage::disk('public')->exists($notice->image)) {
                Storage::disk('public')->delete($notice->image);
            }

            $imagePath = $request->file('image')->store('notices', 'public');
            $notice->image = $imagePath;
        }

        $notice->save();

        flash()->success('Notice Updated Successfully!');
        return redirect()->back();
    }




    public function show_notice($id){
        $notice = Notice::findOrFail($id);
        return view('admin.show_notice',compact('notice'));
    }


    public function view_slider(){
        $sliders = Slider::all();
        return view('admin.view_slider', compact('sliders'));

    }

    public function add_slider(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slider = new Slider;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sliders', 'public');
            $slider->image = $imagePath;
        }

        $slider->save();
        flash()->success('Slider Image created successfully!');
        return redirect()->back();
    }

    public function delete_slider($id){
        $slider = Slider::findOrFail($id);

        if($slider->image && Storage::disk('public')->exists($slider->image)){
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();
        flash()->error('Notice Deleted successfully!');
        return redirect()->back();
    }



    //faculties
    public function faculties(){

        $faculties = Faculties::all();
        return view('admin.faculties',compact('faculties'));
    }
    public function add_faculties(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'designation'=> 'required|string',
            'department'=> 'required|string',
            'phone'=> 'required|string',
            'email'=> 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $faculties = new Faculties;

        $faculties->name = $request->name;
        $faculties->designation = $request->designation;
        $faculties->department = $request->department;
        $faculties->phone = $request->phone;
        $faculties->email = $request->email;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('faculties', 'public');
            $faculties->image = $imagePath;
        }

        $faculties->save();
        flash()->success('Faculties created successfully!');
        return redirect()->back();
    }

    public function delete_faculty($id){
        $faculty = Faculties::findOrFail($id);

        if($faculty->image && Storage::disk('public')->exists($faculty->image)){
            Storage::disk('public')->delete($faculty->image);
        }

        $faculty->delete();
        flash()->error('Notice Deleted successfully!');
        return redirect()->back();
    }


}
