<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
class TestController extends Controller
{
    public function test1(){
        // echo 'test';
        $pages = page::where('id',1)->first();
        return view('test',['page'=>$pages]);
        // dd($pages);
        // echo "$pages->name $pages->description";
        // foreach ($pages as $page) {
        //     echo $page->name;
        // }
        // echo "hi";

    }
}
