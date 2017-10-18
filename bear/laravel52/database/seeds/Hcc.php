<?php

use Illuminate\Database\Seeder;

class Hcc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hcc')->insert([
            'name' => '胡聪聪',
        ]);
    }
}
