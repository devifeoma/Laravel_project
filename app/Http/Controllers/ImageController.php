<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Image;

class ImageController extends Controller
{
    //

    public function index(Request $request){
    	// dd($request->method());
    	if($request->method() != 'POST'){
    		// dd('hi');
    	return view('upload');
    	}
    	// dd('hey');

    	$filename = "pictures/".$request->file('fileToUpload')->getClientOriginalName();

    	\Storage::disk('custom')->put($filename, file_get_contents($request->file('fileToUpload')));

    	Image::create(['reference'=>
    		$filename]);

    	\Session::flash('success', 'Picture Successfuly upload');
    	return back();

    }
}
