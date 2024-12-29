<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::insert(
            [
                [
                    'id' => 1,
                    'name' => 'Action'
                ],
                [
                    'id' => 2,
                    'name' => 'Comedy'
                ],
                [
                    'id' => 3,
                    'name' => 'Drama'
                ],
                [
                    'id' => 4,
                    'name' => 'Adventure'
                ],
                [
                    'id' => 5,
                    'name' => 'Fantasy'
                ],
                [
                    'id' => 6,
                    'name' => 'Romance'
                ]
            ]
        );
    }
}
