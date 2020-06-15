<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //测试

    public function index(){
        echo date("Y-m-d H:i:s");
    }
}
