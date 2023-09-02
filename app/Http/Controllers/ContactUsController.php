<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use Mail;
class ContactUsController extends Controller
{
    public function index(){
        $pages = page::All();
        return view('website.contact',["pages"=>$pages]);
    }
    public function form(Request $request){
        $input = $request->all();
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'mess'=>'required'
        ]);
        Mail::send('mails.contactus', ['name'=>$validatedData['name'],'email'=>$validatedData['email'],'mess'=>$validatedData['mess']],function($m){
            $m->from('no-reply@cokitana.com','Cokitana website');
            $m->to('contact@gmail.com');
        });
        // dd($validatedData);

    }
}
