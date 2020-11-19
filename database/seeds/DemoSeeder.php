<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Schema::hasColumn('demo', 'email')) {
            Schema::table('demo', function (Blueprint $table) {
                $table->string('email');
            });
        }
    }
}
