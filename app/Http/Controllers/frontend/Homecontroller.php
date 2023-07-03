<?php


namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Homepage;

class Homecontroller extends Controller
{
    public function index(Request $request){
        $home= Homepage::all();
        return view('frontend.index', compact('home'));
    }
}
