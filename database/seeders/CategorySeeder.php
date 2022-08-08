<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Uncategorized",
                "type" => "2",
            ],
            [
                "name" => "Uncategorized",
                "type" => "1",
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
