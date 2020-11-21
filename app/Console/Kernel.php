<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //把要注册的命令写这里
        \App\Console\Commands\CurlPost::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//         $schedule->command('inspire')
//                  ->everyMinute();
        //任务计划写这里，我测试下之前写的php artisan curl:post www.baidu.com --data="age=3&name=zhangsan"
        //命令行输入 php artisan schedule:run 即可执行任务
        $schedule->command('curl:post  www.baidu.com --data="age=3&name=zhangsan"')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
