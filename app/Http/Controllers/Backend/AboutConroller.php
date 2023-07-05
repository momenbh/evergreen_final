<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutConroller extends Controller
{
    public function about(){
        return view('admin.about_edit');
    }
    public function pages(){
        $about = About::first();
        return view('frontend.about',compact('about'));
    }

    public function store(Request $request){
        // dd($request);

        $about = new About();

        $about->Video_one_url = $request->Video_one_url;
        $about->Video_two_url = $request->Video_two_url;
        $about->brief_about_us = $request->brief_about_us;
        $about->mission_statement = $request->mission_statement;
        $about->vision_statement = $request->vision_statement;
        $fileName = null;
         
        // $updateSetting = Setting::where('id',2)->first();
        if ($request->hasFile('a_image')) {

            // if($updateSetting){
            //     File::delete(public_path('uploads/settings/'.$updateSetting->logo_image));
            // }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('a_image')->getClientOriginalExtension();
            $request->file('a_image')->storeAs('/uploads/aboutimage', $fileName);
        }
            //  dd($request->all());
        $about->a_image = $fileName;

        $about->save();

        return redirect()->back();
        
    }
    
}
