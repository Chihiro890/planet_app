<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            [
                'name' => '水星',
                'englishname' => 'MERCURY',
                'radius' => '2439',
                'weght' => '3310',
            ],
            [
                'name' => '金星',
                'englishname' => 'VENUS',
                'radius' => '6052',
                'weght' => '48700',
            ],
            [
                'name' => '地球',
                'englishname' => 'EARTH',
                'radius' => '6378',
                'weght' => '59760',
            ],
            [
                'name' => '火星',
                'englishname' => 'MARS',
                'radius' => '3397',
                'weght' => '6420',
            ],
            [
                'name' => '木星',
                'englishname' => 'JUPITER',
                'radius' => '71492',
                'weght' => '18993500',
            ],
            [
                'name' => '土星',
                'englishname' => 'SATURN',
                'radius' => '60268',
                'weght' => '5685980',
            ],
            [
                'name' => '天王星',
                'englishname' => 'URANUS',
                'radius' => '25559',
                'weght' => '868910',
            ],
            [
                'name' => '海王星',
                'englishname' => 'NEPTUNE',
                'radius' => '24764',
                'weght' => '1029660',
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
