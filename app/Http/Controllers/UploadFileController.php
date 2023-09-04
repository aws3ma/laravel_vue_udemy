<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary;
class UploadFileController extends Controller
{
    public function index(){
        return view('website.uploadfile');
    }
    public function uploadFile(Request $request){
        // dd($request->all());
        $imageName = $request->file('image');
        $result = Cloudinary::upload($imageName->getRealPath());
        dd($result->getSecurePath());
    }
}
