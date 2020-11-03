<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productRecords = [
        	['id'=>1,'category_id'=>16,'section_id'=>1,'product_name'=>'Blue T-Shirt','product_code'=>'BT001','product_color'=>'Blue','product_price'=>'150000','product_discount'=>10,'product_weight'=>60,'product_video'=>'','product_image'=>'','description'=>'Test Product','wash_care'=>'','fabric'=>'','pattern'=>'','sleeve'=>'','fit'=>'','occasion'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','is_featured'=>'No','status'=>1],

        	['id'=>2,'category_id'=>16,'section_id'=>1,'product_name'=>'Red T-Shirt','product_code'=>'BT002','product_color'=>'Red','product_price'=>'150000','product_discount'=>10,'product_weight'=>60,'product_video'=>'','product_image'=>'','description'=>'Test Product','wash_care'=>'','fabric'=>'','pattern'=>'','sleeve'=>'','fit'=>'','occasion'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','is_featured'=>'Yes','status'=>1]
        ];
        Product::insert($productRecords);
    }
}
