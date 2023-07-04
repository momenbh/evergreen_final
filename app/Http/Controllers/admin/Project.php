<?php

namespace App\Http\Controllers\admin;


use App\Models\Table;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Unique;

class Project extends Controller
{
    public function addproject()
    {

        return view('admin.add_projects');
    }
    public function store(Request $request)

    {
       

        $project = new Table();

        $project->project_name = $request->project_name;
        $project->description = $request->description;
        $project->video_url = $request->video_url;
         
        if ($request->hasFile('thumbnail_image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('thumbnail_image')->getClientOriginalExtension();
            $request->file('thumbnail_image')->storeAs('/uploads/project', $fileName);
        }

        $project->thumbnail_image = $fileName;

        $project->save();


        //multiple image
        
        if ($request->project_image) {
            foreach ($request->project_image as $img) {
           
                $image = new Image();
                $image->project_id = $project->id;
                $fileName = date('Ymdhmi') . uniqid(). '.' . $img->getClientOriginalExtension();
                $img->move(public_path('/uploads/projects'), $fileName);
                $image->filename = $fileName;
                $image->save();
                
            }
        }

        // id,project_id, filename

        return redirect()->route('view.project');
    }
    public function view()
    {
        $table = Table:: orderby('id', 'desc')->paginate(5);
        $images = Image::all();
        return view('admin.manage_projects', compact('table','images'));
    }

    public function delete($id)
    {
        Table::find($id)->delete();
        Image::where('project_id',$id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $table = Table::find($id);
        $images = Image::all();
        return view('admin.edit_projects', compact('table','images'));
    }
    public function update(Request $request,$id)

    {
        // dd($request->all());
        
        $thumbnailimage =  Table::where('id',$id)->first();
        
        $fileName=$thumbnailimage->thumbnail_image;

        if ($request->hasFile('thumbnail_image')) {

            if($thumbnailimage){
                File::delete(public_path('uploads/project/'.$thumbnailimage->thumbnail_image));
            }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('thumbnail_image')->getClientOriginalExtension();
            $request->file('thumbnail_image')->storeAs('/uploads/project', $fileName);
        }

        $thumbnailimage->thumbnail_image = $fileName;

        // $project->save();

     

       
        $thumbnailimage->update([

            'project_name' => $request->project_name,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'thumbnail_image' => $fileName,
            // 'filename'=>$fileName,
        ]);

        
        if ($request->hasFile('project_image')) {
            $projectimages = Image::where("project_id",$id)->get();
            foreach($projectimages as $image){
                File::delete(public_path('uploads/projects/'.$image->filename));
                $image->delete();
            }
            foreach ($request->project_image as $img) {
           
                $image = new Image();
                $image->project_id = $id;
                $fileName = date('Ymdhmi') . uniqid(). '.' . $img->getClientOriginalExtension();
                $img->move(public_path('/uploads/projects'), $fileName);
                $image->filename = $fileName;
                $image->save();
                
            }
        }

        
        return redirect()->route('view.project');
    }
}