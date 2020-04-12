<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // OLT
        DB::table('images')->insert(['id' => 1, 'project_id' => 1, 'name' => 'ima_OLT_1.png']);
        DB::table('images')->insert(['id' => 2, 'project_id' => 1, 'name' => 'ima_OLT_2.png']);
        
        // SGM
        DB::table('images')->insert(['id' => 3, 'project_id' => 2, 'name' => 'ima_SGM_1.png']);
        DB::table('images')->insert(['id' => 4, 'project_id' => 2, 'name' => 'ima_SGM_2.png']);

        // ASEOS
        DB::table('images')->insert(['id' => 5, 'project_id' => 3, 'name' => 'AseosCabinaAseo.png']);
        DB::table('images')->insert(['id' => 6, 'project_id' => 3, 'name' => 'AseosCabina.png']);
        DB::table('images')->insert(['id' => 7, 'project_id' => 3, 'name' => 'AseosCabinaEnvioReportes.png']);

        // LANCASS
        DB::table('images')->insert(['id' => 8, 'project_id' => 4, 'name' => 'CASS1.png']);
        
        // HCC
        DB::table('images')->insert(['id' => 9, 'project_id' => 5, 'name' => 'HCC01.png']);

        // HITLIST
        DB::table('images')->insert(['id' => 10, 'project_id' => 6, 'name' => 'HitListWeb.png']);
        DB::table('images')->insert(['id' => 11, 'project_id' => 6, 'name' => 'HitList_device.png']);
        DB::table('images')->insert(['id' => 12, 'project_id' => 6, 'name' => 'HitListiOS.png']);

        // MAINCONTROL
        DB::table('images')->insert(['id' => 13, 'project_id' => 7, 'name' => 'MaintControl.png']);
        DB::table('images')->insert(['id' => 14, 'project_id' => 7, 'name' => 'MaintControl2.png']);
        DB::table('images')->insert(['id' => 15, 'project_id' => 7, 'name' => 'MaintControl3.png']);

        // BIS DEFENDOR
        DB::table('images')->insert(['id' => 16, 'project_id' => 8, 'name' => 'safebindefendor.png']);
        DB::table('images')->insert(['id' => 17, 'project_id' => 8, 'name' => 'bisdefendor01.png']);
        DB::table('images')->insert(['id' => 18, 'project_id' => 8, 'name' => 'bisdefendor02.png']);
        DB::table('images')->insert(['id' => 19, 'project_id' => 8, 'name' => 'bisdefendor03.png']);

        // AOG
        DB::table('images')->insert(['id' => 20, 'project_id' => 9, 'name' => 'aog1.jpg']);
        DB::table('images')->insert(['id' => 21, 'project_id' => 9, 'name' => 'aog2.jpg']);
        DB::table('images')->insert(['id' => 22, 'project_id' => 9, 'name' => 'aog3.jpg']);
        DB::table('images')->insert(['id' => 23, 'project_id' => 9, 'name' => 'aog4.jpg']);
        DB::table('images')->insert(['id' => 24, 'project_id' => 9, 'name' => 'aog5.jpg']);
        DB::table('images')->insert(['id' => 25, 'project_id' => 9, 'name' => 'aog6.jpg']);

        // OLT
        DB::table('images')->insert(['id' => 26, 'project_id' => 1, 'name' => 'ima_OLT_3.png']);
        
        // SGM
        DB::table('images')->insert(['id' => 27, 'project_id' => 2, 'name' => 'ima_SGM_3.png']);

        // LANCASS
        DB::table('images')->insert(['id' => 28, 'project_id' => 4, 'name' => 'CASS2.png']);
        DB::table('images')->insert(['id' => 29, 'project_id' => 4, 'name' => 'CASS3.png']);
        
        // HCC
        DB::table('images')->insert(['id' => 30, 'project_id' => 5, 'name' => 'HCC02.png']);
        DB::table('images')->insert(['id' => 31, 'project_id' => 5, 'name' => 'HCC03.png']);
    }
}
