<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'seller_name' => 'Nike Indonesia',
            'filename' => 'airmax.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'airmax.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'        
            ]);

            DB::table('sellers')->insert([
                'seller_name' => 'Adidas Indonesia',
                'filename' => 'nmd.jpg',
                'mime' => 'image/jpeg',
                'original_filename' => 'nmd.jpg',
                'created_at' => '2019-12-25 14:56:46',
                'updated_at' => '2019-12-25 14:57:58'        
                ]);

            DB::table('sellers')->insert([
                'seller_name' => 'Gucci International',
                'filename' => 'gucci.jpg',
                'mime' => 'image/jpeg',
                'original_filename' => 'gucci.jpg',
                'created_at' => '2019-12-25 14:56:46',
                'updated_at' => '2019-12-25 14:57:58'        
                ]);

            DB::table('sellers')->insert([
                'seller_name' => 'Louis Vuitton',
                'filename' => 'lv.jpg',
                'mime' => 'image/jpeg',
                'original_filename' => 'lv.jpg',
                'created_at' => '2019-12-25 14:56:46',
                'updated_at' => '2019-12-25 14:57:58'        
                ]);    
            
                DB::table('sellers')->insert([
                    'seller_name' => 'Reseller Indo',
                    'filename' => 'nahsneaker.jpg',
                    'mime' => 'image/jpeg',
                    'original_filename' => 'nahsneaker.jpg',
                    'created_at' => '2019-12-25 14:56:46',
                    'updated_at' => '2019-12-25 14:57:58'        
                    ]); 
                
            }
}
