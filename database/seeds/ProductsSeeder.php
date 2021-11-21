<?php

use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'Product_type'=>'Food',
                'Product_name'=>'Sardines',
                'Product_stock'=>100,
                'Product_description'=>'Tomato sauce tuna',
                'Price'=>12,
            ],
            [
                'Product_type'=>'Drinks',
                'Product_name'=>'Naturespring',
                'Product_stock'=>100,
                'Product_description'=>'Dringking water',
                'Price'=>8,
            ],
            [
                'Product_type'=>'Softdrinks',
                'Product_name'=>'Coca cola',
                'Product_stock'=>100,
                'Product_description'=>'Coke',
                'Price'=>12,
            ],
            [
                'Product_type'=>'Junk food',
                'Product_name'=>'Mang juan',
                'Product_stock'=>100,
                'Product_description'=>'Chicharon',
                'Price'=>12,
            ],
           
            ];
            foreach($products as $products){
                App\Products::create($products);
            }
    }
}
