<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'title' => 'task1',
                'body' => 'task1の内容です'
            ],
            [
                'title' => 'task2',
                'body' => 'task2の内容です'
            ]
        ];
        DB::table('tasks')->insert($param);
    }
}
