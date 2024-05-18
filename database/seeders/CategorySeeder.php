<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'Sack',
                'slug'  => 'sack',
                'user_id' => 1,
            ],
            [
                'id'    => 2,
                'name'  => 'Bulk',
                'slug'  => 'bulk',
                'user_id' => 1,
            ]
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
