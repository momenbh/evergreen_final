<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutConroller extends Controller
{
    public function about(){
        $aboutimg= About::first();
        return view('admin.about_edit',compact('aboutimg'));
    }
    public function pages(){
        $aboutimg = About::first();
        $aboutimage =Team::all();
        return view('frontend.about',compact('aboutimg','aboutimage'));
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
         
        $aboutimg = About::where('id',6)->first();
        
        if ($request->hasFile('a_image')) {

            if($aboutimg){
                File::delete(public_path('uploads/aboutimage/'.$aboutimg->a_image));
            }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('a_image')->getClientOriginalExtension();
            $request->file('a_image')->storeAs('/uploads/aboutimage', $fileName);
        }
            //  dd($request->all());
        $about->a_image = $fileName;

        // $about->save();

        //multiple image

        if ($request->team_image) {
            $aboutimages = Team::where('about_id',6)->get();
            foreach($aboutimages as $image){
                File::delete(public_path('uploads/teamimage/'.$image->filename));
                $image->delete();
            }
            foreach ($request->team_image as $img){
                $detailimg = new Team();
                $detailimg->about_id = 6;
                $fileName = time() . uniqid(). '.' . $img->getClientOriginalExtension();
                $img->move(public_path('/uploads/teamimage'), $fileName);
                $detailimg->filename = $fileName;
                $detailimg->save();

            }
        }

              $aboutimg->update([
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
