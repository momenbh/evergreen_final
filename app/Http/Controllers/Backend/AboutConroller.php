<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
         
        $aboutimage = About::where('id',5)->first();
        
        if ($request->hasFile('a_image')) {

            if($aboutimage){
                File::delete(public_path('uploads/aboutimage/'.$aboutimage->a_image));
            }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('a_image')->getClientOriginalExtension();
            $request->file('a_image')->storeAs('/uploads/aboutimage', $fileName);
        }
            //  dd($request->all());
        $about->a_image = $fileName;

        // $about->save();
              $aboutimage->update([
                'Video_one_url'=>$request->Video_one_url,
                'Video_two_url'=>$request->Video_two_url,
                'brief_about_us'=>$request->brief_about_us,
                'mission_statement'=>$request->mission_statement,
                'vision_statement'=>$request->vision_statement,
                'a_image'=>$fileName,

              ]);



        return redirect()->back();
        
    }
    
}
