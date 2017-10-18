<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  DB::table('goods')->insert([
            'goods_sn' => 10001,
            'goods_name' => '加多宝凉茶',
            'prize' => 3.5
        ]);*/
        factory(App\Models\Good::class,10)->create(); //create()表示插入数据库中
    }
}
