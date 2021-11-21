<?php

use Illuminate\Database\Seeder;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = [
            [
                'Name'=>'Dominic',
                'Email'=>'diezdominic222@gmail.com',
                'Product_type'=>'Softdrinks',
                'Total_sales'=>200,

            ],
            [
                'Name'=>'Ike',
                'Email'=>'IkeBelida@gmail.com',
                'Product_type'=>'Food',
                'Total_sales'=>150,

            ],
            [
                'Name'=>'Aldri',
                'Email'=>'Aldgo@gmail.com',
                'Product_type'=>'Drinks',
                'Total_sales'=>100,

            ],
            [
                'Name'=>'Jay',
                'Email'=>'JayC@gmail.com',
                'Product_type'=>'Junk food',
                'Total_sales'=>50,

            ],
            ];
            foreach($sellers as $sellers){
                \App\Sellers::create($sellers);
            }
    }
}
