<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Database\Connection;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use PDO;

class DebugController extends Controller
{
    public function index(){
        \App\Jobs\SendEmail::dispatch()->onQueue('emails');
        \App\Jobs\SendEmail::dispatch()->onQueue('emails');
        \App\Jobs\SendEmail::dispatch()->onQueue('emails');
        \App\Jobs\SendEmail::dispatch()->onQueue('emails');
        echo '1.修改.env的QUEUE_DRIVER=database'.PHP_EOL;
        echo '2.运行php artisan queue:table生成建表脚本'.PHP_EOL;
        echo '3.运行php artisan migrate生成表'.PHP_EOL;
        echo '任务添加完成,请用php artisan queue:work --queue=emails启动';
    }
}
