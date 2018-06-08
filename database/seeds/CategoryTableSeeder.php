<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$category = new Category();
        $category->name = 'PHP';
        $category->save();
        $category = new Category();
        $category->name = 'Javascript';
        $category->save();
        $category = new Category();
        $category->name = 'CSS';
        $category->save();
        $category = new Category();
        $category->name = 'Python';
        $category->save();
    }
}
