<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
class TestController extends Controller
{
    public function test1(){
        // echo 'test';
        $pages = page::All();
        dd($pages);
        echo "hi";

    }
}
