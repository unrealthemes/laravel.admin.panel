<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminOrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [];


        for ($y = 1; $y <= 12; $y++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'order_id' => $y,
                    'product_id' => $i,
                    'qty' => rand(1,4),
                    'title' => 'Casio Test Prod',
                    'price' => rand(40,200),
                ];
            }
        }

        DB::table('order_products')->insert($data);
    }

}
