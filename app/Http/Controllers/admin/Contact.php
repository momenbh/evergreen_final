<?php

namespace App\Http\Controllers\admin;

use App\Models\Pagecontact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File ;

class Contact extends Controller
{
    public function contact()
    {
        $contact=Pagecontact::first();
        return view('admin.contact_page_edit',compact('contact'));
    }
    public function store(Request $request){
        // dd($request->all());
        $contact = new Pagecontact();
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->number = $request->number;
        $contact->map_embedded = $request->map_embedded;
        $contact->work_hour = $request->work_hour;
        $contact->contact_email = $request->contact_email;
        $fileName = null;

        $bannerimage =Pagecontact::where('id',9)->first();

        if ($request->hasFile('banner_image')) {

            if($bannerimage){

                File::delete(public_path('uploads/banner/'.$bannerimage->banner_image));
            }
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->storeAs('/uploads/banner', $fileName);
        }
            //  dd($request->all());
        $contact->banner_image = $fileName;

        //update

        // $contact->save();
        

        $bannerimage->update([
            // dd($request->all()),
            'address'=>$request->address,
            'email'=>$request->email,
            'website'=>$request->website,
            'number'=>$request->number,
            'map_embedded'=>$request->map_embedded,
            'work_hour'=>$request->work_hour,
            'contact_email'=>$request->contact_email,
            'banner_image'=>$fileName,

        ]);

        return redirect()->back();
    }

    public function view(){
        
        return view('frontend.contact');
    }

}
