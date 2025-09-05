<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsoleGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('console_game')->insert([
            ['game_id' => 1, 'console_id' => 3],
            ['game_id' => 2, 'console_id' => 1],
            ['game_id' => 2, 'console_id' => 2],
            ['game_id' => 3, 'console_id' => 3],
            ['game_id' => 4, 'console_id' => 3],
            ['game_id' => 4, 'console_id' => 1],
            ['game_id' => 5, 'console_id' => 1],
            ['game_id' => 5, 'console_id' => 2],
            ['game_id' => 5, 'console_id' => 3],
            ['game_id' => 6, 'console_id' => 1],
            ['game_id' => 6, 'console_id' => 2],
            ['game_id' => 7, 'console_id' => 1],
            ['game_id' => 7, 'console_id' => 2],
            ['game_id' => 8, 'console_id' => 1],
            ['game_id' => 9, 'console_id' => 1],
            ['game_id' => 9, 'console_id' => 2],
            ['game_id' => 9, 'console_id' => 3],
            ['game_id' => 10, 'console_id' => 1],
        ]);
    }
}
