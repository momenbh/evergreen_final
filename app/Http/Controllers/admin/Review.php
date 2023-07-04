<?php

namespace App\Http\Controllers\admin;


use App\Models\Reviewclient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class Review extends Controller
{
    public function reviews(){

        return view('admin.add_reviews');
    }
    public function manage(){
        $reviews =Reviewclient::orderby('id', 'desc')->paginate(5);

        return view('admin.client_reviews',compact('reviews'));
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        
    $review = new Reviewclient();

    $review->client_name = $request->client_name;
    $review->client_review = $request->client_review;
    
     
    if ($request->hasFile('client_img')) {
          
        // generate name
        $fileName = date('Ymdhmi') . '.' . $request->file('client_img')->getClientOriginalExtension();
        $request->file('client_img')->storeAs('/uploads/client', $fileName);
    }

    $review->client_img = $fileName;
    
    $review->save();
   
       
         return redirect()->route('manage.client');
    }


    public function delete($id){

        Reviewclient::find($id)->delete();
        
        return  redirect()-> back();
    }
    public function edit($id){
        $reviews=Reviewclient::find($id);
        return view('admin.edit_client_reviews',compact('reviews'));
    }
    public function update(Request $request,$id){

        $clientreview = Reviewclient::where('id',$id)->first();
          $fileName=$clientreview->client_img;

        if ($request->hasFile('client_img')) {
            
            if($clientreview){
                File::delete(public_path('uploads/client/'.$clientreview->client_img));
            }
          
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('client_img')->getClientOriginalExtension();
            $request->file('client_img')->storeAs('/uploads/client', $fileName);
        }
        
        $clientreview->update([
            'client_name'=>$request->client_name,
            'client_review'=>$request->client_review,
            'client_img'=>$fileName,
    
        ]);
             return redirect()->route('manage.client');
    }
}
