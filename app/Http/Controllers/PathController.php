<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PathController extends Controller
{
    public function index()
    {
        //app_path();
        //app_path函数返回app目录的绝对路径：
        $path = app_path();
        echo $path . PHP_EOL;

        //你还可以使用app_path函数为相对于app目录的给定文件生成绝对路径：
        $path = app_path('Http/Controllers/Controller.php');
        echo $path . PHP_EOL;

        //base_path();
        //base_path函数返回项目根目录的绝对路径：
        $path = base_path();
        echo $path . PHP_EOL;

        //你还可以使用base_path函数为相对于应用目录的给定文件生成绝对路径：
        $path = base_path('vendor/bin');
        echo $path . PHP_EOL;

        //config_path();
        //config_path函数返回应用配置目录的绝对路径：
        $path = config_path();
        echo $path . PHP_EOL;

        //database_path();
        //database_path函数返回应用数据库目录的绝对路径：
        $path = database_path();
        echo $path . PHP_EOL;

        //public_path();
        //public_path函数返回public目录的绝对路径：
        $path = public_path();
        echo $path . PHP_EOL;

        //storage_path();
        //storage_path函数返回storage目录的绝对路径：
        $path = storage_path();
        echo $path . PHP_EOL;

        //还可以使用storage_path函数生成相对于storage目录的给定文件的绝对路径：
        $path = storage_path('app/file.txt');
        echo $path . PHP_EOL;
    }
}
