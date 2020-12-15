<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $title='我是你喜欢的标题';
        $bottons=[
            ['title'=>'新建'],
            ['title'=>'编辑'],
            ['title'=>'删除'],
            ['title'=>'导入'],
            ['title'=>'导出'],
        ];
        return view('layouts.base')
            ->withTitle($title)
            ->withBottons($bottons);
    }
}
