<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
use App\Models\Special;
class HomeController extends Controller
{
    public function index(){
        $pages = page::All();
        $selectedPage = page::where('name','Home')->first();
        $specials = Special::All();
        return view('website.home',["pages"=>$pages,"selectedPage"=>$selectedPage, "specials"=>$specials]);
    }
    public function page($pageId){
        $pages = page::All();
        $selectedPage = page::where('id',$pageId)->first();
        $specials = Special::All();
        return view('website.home',["pages"=>$pages,"selectedPage"=>$selectedPage , "specials"=>$specials]);
    }
    public function show($id){
        $special = Special::where('id',$id)->first();
        return view('website.special',["special"=>$special]);
    }
}
