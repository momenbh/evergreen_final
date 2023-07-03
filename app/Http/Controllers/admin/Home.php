<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\Homecontroller;
use Illuminate\Http\Request;
use App\Models\Homepage;

class Home extends Controller
{
    public function homepage_edit(){
        $home= Homepage::all();
        return view('admin.homepage_edit', compact('home'));
    }

    public function homepage_edit_store(Request $request){

        $home_page = new Homepage();

        $home_page->about_section_title = $request->about_section_title;
        $home_page->about_description = $request->about_description;
        $home_page->experience_year = $request->experience_year;
        $fileName=null;
        if ($request->hasFile('about_image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('about_image')->getClientOriginalExtension();
            $request->file('about_image')->storeAs('/uploads/banner', $fileName);
        }

        $home_page->about_image = $fileName;
        // $project->project_image = $fileName;
        // $home_page->update();




        $home_page->save();

        // $result=Homepage::where('id',1)->update(
        //     ['about_section_title'=>$request->about_section_title,
        //     'about_description'=>$request->about_description,
        //     'about_image'=>$fileName,
        //     'experience_year'=>$request->experience_year]);

        
        
        return redirect()->route('homepage_edit');
    }
}
