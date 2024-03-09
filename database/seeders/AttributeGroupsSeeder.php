<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeGroupsSeeder extends Seeder
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
                'id' => '1',
                'title' => 'Механизм',
            ],
            [
                'id' => '2',
                'title' => 'Стекло',
            ],
            [
                'id' => '3',
                'title' => 'Ремешок',
            ],
            [
                'id' => '4',
                'title' => 'Корпус',
            ],
            [
                'id' => '5',
                'title' => 'Индикация',
            ],
        ];

        DB::table('attribute_groups')->insert($data);
    }
}
