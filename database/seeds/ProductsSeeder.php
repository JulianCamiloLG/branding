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
        DB::table('products')->insert([
            "precio"=>29.90,
            "nombre"=>"Ripped Jeans",
            "foto"=>"jeans1.jpg",
            "tipo"=>"jean"
            
        ]);
        DB::table('products')->insert([
            "precio"=>39.90,
            "nombre"=>"Mega Jeans",
            "foto"=>"jeans2.jpg",
            "tipo"=>"jean"
        ]);
        DB::table('products')->insert([
            "precio"=>35.90,
            "nombre"=>"Washed Jeans",
            "foto"=>"jeans3.jpg",
            "tipo"=>"jean"
            
        ]);
        DB::table('products')->insert([
            "precio"=>39.90,
            "nombre"=>"Vintage Jeans",
            "foto"=>"jeans4.jpg",
            "tipo"=>"jean"
        ]);

        DB::table('products')->insert([
            "precio"=>69.90,
            "nombre"=>"Pinky Velt",
            "foto"=>"item-04.jpg",
            "tipo"=>"bolso"
        ]);
        DB::table('products')->insert([
            "precio"=>79.90,
            "nombre"=>"Blue Bar",
            "foto"=>"item-05.jpg",
            "tipo"=>"bolso"
            
        ]);

        DB::table('products')->insert([
            "precio"=>149.90,
            "nombre"=>"Blue Parka",
            "foto"=>"item-03.jpg",
            "tipo"=>"chaqueta"
            
        ]);
        DB::table('products')->insert([
            "precio"=>249.90,
            "nombre"=>"Red Tennis",
            "foto"=>"item-06.jpg",
            "tipo"=>"zapato"
            
        ]);
        DB::table('products')->insert([
            "precio"=>249.90,
            "nombre"=>"Elegant Dress",
            "foto"=>"dress1.jpg",
            "tipo"=>"vestido"
        ]);
        DB::table('products')->insert([
            "precio"=>279.90,
            "nombre"=>"Casual Dress",
            "foto"=>"dress2.jpg",
            "tipo"=>"vestido" 
        ]);
        DB::table('products')->insert([
            "precio"=>349.90,
            "nombre"=>"Sexy Dress",
            "foto"=>"dress3.jpg",
            "tipo"=>"vestido"
        ]);
        DB::table('products')->insert([
            "precio"=>49.90,
            "nombre"=>"Sport Shirt",
            "foto"=>"camisa1.jpg",
            "tipo"=>"camisa"
        ]);
        DB::table('products')->insert([
            "precio"=>59.90,
            "nombre"=>"Elegant Shirt",
            "foto"=>"camisa2.jpg",
            "tipo"=>"camisa"
        ]);
        DB::table('products')->insert([
            "precio"=>99.90,
            "nombre"=>"Casual Shirt",
            "foto"=>"camisa4.jpg",
            "tipo"=>"camisa"
        ]);
        DB::table('products')->insert([
            "precio"=>79.90,
            "nombre"=>"Elegant Shirt",
           "foto"=>"camisa3.jpg",
            "tipo"=>"camisa"
        ]);
            
    }
}
