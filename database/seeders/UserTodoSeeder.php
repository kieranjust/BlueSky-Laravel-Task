<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedUserTodos = [
            [
                'user_id' => 1,
                'todo_ids' => [2, 5, 6, 7, 8],
            ],

        ];
    }
}
