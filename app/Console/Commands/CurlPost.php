<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CurlPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'curl:post {url} {--data=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send post request';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //使用方法 命令行输入 php artisan curl:post www.baidu.com --data="age=3&name=zhangsan"
        $url = $this->argument('url');
        $data = $this->option('data');
        $msg='请求url:'. $url.PHP_EOL.
            '请求参数:'.$data.PHP_EOL.
            '请求时间：'.date('Y-m-d H:i:s').PHP_EOL;
        echo $msg;
        //把这个$msg写入到文件,演示任务计划更明显
        file_put_contents(public_path().'/schedule.log',$msg.PHP_EOL,FILE_APPEND);
    }
}
