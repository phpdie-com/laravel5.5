<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function index(){
        $result=DB::table('users')->pluck('email');//返回指定名称为email的字段列
        dd(instance of DB::table('users'));
    }
}
