<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
class HomeController extends Controller
{
    public function index(){
        $pages = page::All();
        $selectedPage = page::where('name','Home')->first();
        return view('website.home',["pages"=>$pages,"selectedPage"=>$selectedPage]);
    }
    public function page($pageId){
        $pages = page::All();
        $selectedPage = page::where('id',$pageId)->first();
        return view('website.home',["pages"=>$pages,"selectedPage"=>$selectedPage]);
    }
}
