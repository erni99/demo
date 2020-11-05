<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUpload()
    {
    	return view('image.upload');
    }

    public function imageUploadPost(Request $request)
    {
    	$request->validate(['image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

    	$imageName = time().'.'.$required->image->extension();
    	$request->image->move(public_path('image'),$imageName);

    	return back()
    	->with('success', 'You have successfully upload image')
    	->with('image',$imageName)
    }
}
