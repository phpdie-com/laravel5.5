<?php

use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form')->truncate();

        $time = date('Y-m-d H:i:s');
        DB::table('form')->insert([
            'name' => 'andy',
            'is_admin' => 0,
            'data' => json_encode(['zhangsan' => '张三', 'lisi' => '李四']),
            'status' => 0,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('form')->insert([
            'name' => 'lidia',
            'is_admin' => 1,
            'data' => json_encode(['zhangsana' => '张三啊', 'lisia' => '李四啊']),
            'status' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);
    }
}
