<?php

use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales = [
            [
                'ProductId'=>1,
                'Total_sales'=>200,
            ],
            [
                'ProductId'=>2,
                'Total_sales'=>150,
            ],
            [
                'ProductId'=>3,
                'Total_sales'=>100,
            ],
            [
                'ProductId'=>4,
                'Total_sales'=>50,
            ],
            ];
            foreach($sales as $sales){
                App\Sales::create($sales);
            }
    }
}
