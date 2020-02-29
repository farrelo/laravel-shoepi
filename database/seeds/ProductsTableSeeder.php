<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Men Nike Air Max 97',
            'seller_id' => '1',
            'cat_id' => '1',
            'price' => '2000000',
            'rating' => '4',
            'stock' => '999',
            'description' => 'Available Colors: Challenge Red/White/Black/Metallic Gold',
            'filename' => 'airmax.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'airmax.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Adidas NMD',
            'seller_id' => '2',
            'cat_id' => '1',
            'price' => '1800000',
            'rating' => '4',
            'stock' => '400',
            'description' => 'Available Colors: Black, White, Pink',
            'filename' => 'nmd.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'nmd.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Gucci Mens leather Horsebit loafer with Web',
            'seller_id' => '3',
            'cat_id' => '5',
            'price' => '10000000',
            'rating' => '3',
            'stock' => '20',
            'description' => ' Crafted from soft black leather, the loafers refined shape is enriched with a combination of two of the Houses most distinct codes: the Web stripe and Horsebit. Since the introduction of its classic shape in the 1950s, the preppy-inspired shoe has continued its influence, redesigned in new forms and materials. The foldable back heel gives the classic design a contemporary appeal.',
            'filename' => 'gucci.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'gucci.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);

        DB::table('products')->insert([
            'product_name' => 'LV Cherie Pump',
            'seller_id' => '4',
            'cat_id' => '4',
            'price' => '15000000',
            'rating' => '4.2',
            'stock' => '5',
            'description' => '
            With its sleek lines, stiletto heel and pointed toe, the Chérie pump is a timelessly feminine style, which is given a fresh twist by the combination of black patent calf leather and Louis Vuittons iconic Monogram canvas. A rubber insert on the leather outsole ensures enhanced resistance to wear.
            ',
            'filename' => 'lv.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'lv.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);
        
        DB::table('products')->insert([
            'product_name' => 'Sepatu NAH Project-SN-05',
            'seller_id' => '4',
            'cat_id' => '1',
            'price' => '250000',
            'rating' => '4.5',
            'stock' => '5',
            'description' => 'We modified the best-selling NAH Project Sneakers Series. This new face on SN-05 Revived is achieved by removing all the panels on the previous version resulting in a simple and clean-looking sneakers.

            Made from grade A faux suede and an extra comfortable ankle foam. Our SN-05 Revived also completed with full side stitch to ensure the durability of the sneakers.
            
            Comes in three colorways: Indigo, Olive, and Maroon. ',
            'filename' => 'nahsneaker.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'nahsneaker.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);

        DB::table('products')->insert([
            'product_name' => 'LAZE Sandal Backstrap',
            'seller_id' => '4',
            'cat_id' => '6',
            'price' => '240000',
            'rating' => '4.2',
            'stock' => '400',
            'description' => 'NAH Laze Sandal terbuat dari material EVA yang memiliki karakteristik lembut dan lentur, menghasilkan sendal yang cocok dipakai sehari-hari untuk beraktivitas maupun bersantai.
            Terdiri dari beberapa varian warna dan dengan/tanpa backstrap, Laze Sandal bisa menjadi salah satu footwear yang wajib kamu miliki! ',
            'filename' => 'lazesandal.jpg',
            'mime' => 'image/jpeg',
            'original_filename' => 'lazesandal.jpg',
            'created_at' => '2019-12-25 14:56:46',
            'updated_at' => '2019-12-25 14:57:58'
        ]);    
        
    }
}
