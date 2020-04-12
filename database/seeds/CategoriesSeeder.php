<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['id' => 1, 'name' => 'Continuous improvement', 'slug' => 'continuous-improvement', 'image' => 'improvement.jpg']);
        DB::table('categories')->insert(['id' => 2, 'name' => 'Maintenance', 'slug' => 'maintenance', 'image' => 'maintenance.jpg']);
        DB::table('categories')->insert(['id' => 3, 'name' => 'Safety Bis Defendor', 'slug' => 'safety-bis-defendor', 'image' => 'safety.jpg']);
        DB::table('categories')->insert(['id' => 4, 'name' => 'Supply Chain', 'slug' => 'supply-chain', 'image' => 'supplychain.jpg']);
    }
}
