<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\Homecontroller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use Illuminate\Support\Facades\File;

class Home extends Controller
{
    public function homepage(){
        $home= Homepage::first();
        return view('admin.homepage_edit', compact('home'));
    }

    public function store(Request $request){
        // dd($request);
        $home_page =  new Homepage();

        $home_page->about_section_title = $request->about_section_title;
        $home_page->about_description = $request->about_description;
        $home_page->experience_year = $request->experience_year;
        $fileName=null;

        $home_pages = Homepage::where('id',1)->first();
        if ($request->hasFile('about_image')) {

            if($home_pages){
                File::delete(public_path('uploads/about/'.$home_pages->about_image));
            }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('about_image')->getClientOriginalExtension();
            $request->file('about_image')->storeAs('/uploads/about', $fileName);
        }

        $home_page->about_image = $fileName;
        // $home_page->save();

        $home_pages->update([
            'about_section_title'=>$request->about_section_title,
            'about_description'=>$request->about_description,
            'experience_year'=>$request->experience_year,
            'about_image'=>$fileName,

        ]);


        return redirect()->back();
    }
}
