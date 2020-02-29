<?php

use Illuminate\Database\Seeder;

class ProductcatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productcats')->insert([
            'category_name' => 'Sneakers',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);    

        
        DB::table('productcats')->insert([
            'category_name' => 'Casual',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);          
        
        DB::table('productcats')->insert([
            'category_name' => 'Sport',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);  

        DB::table('productcats')->insert([
            'category_name' => 'Heels',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);  

        DB::table('productcats')->insert([
            'category_name' => 'Formal',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);  

        DB::table('productcats')->insert([
            'category_name' => 'Sandals',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);  
    
    }
}
