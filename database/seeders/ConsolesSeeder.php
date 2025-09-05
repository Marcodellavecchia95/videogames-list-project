<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consoles = [
            [
                'name' => 'PlayStation 5',
                'brand' => 'Sony',
            ],
            [
                'name' => 'Xbox Series X',
                'brand' => 'Microsoft',
            ],
            [
                'name' => 'Nintendo Switch',
                'brand' => 'Nintendo',
            ],
            [
                'name' => 'PlayStation 4',
                'brand' => 'Sony',
            ],
            [
                'name' => 'Xbox One',
                'brand' => 'Microsoft',
            ],
            [
                'name' => 'Nintendo Wii U',
                'brand' => 'Nintendo',
            ],
            [
                'name' => 'PlayStation 3',
                'brand' => 'Sony',
            ],
            [
                'name' => 'Xbox 360',
                'brand' => 'Microsoft',
            ],
            [
                'name' => 'Nintendo 3DS',
                'brand' => 'Nintendo',
            ],
            [
                'name' => 'Sega Genesis Mini',
                'brand' => 'Sega',
            ],
        ];

        foreach ($consoles as $console) {

            $newconsole = new Console();

            $newconsole->name = $console["name"];
            $newconsole->brand = $console["brand"];

            $newconsole->save();
        }
    }
}
