<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => '/images/hygiene-2448029_1280.jpg',
            'title' => 'Homemade Organically Scented Soap',
            'description' => 'Beautiful and good smelling soap that will make your day better. It is organic and made out of flowers and herbs that will naturally smooth your skin and give you a pleasuring smell.',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/soap-2333391_1280.jpg',
            'title' => 'Peppermint Essential Oil',
            'description' => 'This organically made oil will fill up your room with relaxing and fresh scent.',
            'price' => 14
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/soap-2726371_1280.jpg',
            'title' => 'Satisfying Coconut Candle',
            'description' => 'This candle will comfort you with its coconut smell that gives an allusion of a tropical island. As soon as you light it up it will fill up the room with nice smell of fresh coconut.',
            'price' => 17
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/towel-759980_1280.jpg',
            'title' => 'Tropical Happiness (Soap)',
            'description' => 'This soap will not only smooth your skin with its organic oils but also will satisfy you with its tropical smell. It was made using the most fresh fruits and the best ingredients just to satisfy you with its smell, skin magic, and beauty.',
            'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/leaf-3070153_1280.jpg',
            'title' => 'Lime and Mango Satisfaction (Soap)',
            'description' => 'Using this nicely scented soap with help you fight with acne and bacteria on the skin, because the greatly smelling mango and lime will take care of it.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/food-3062139_1280.jpg',
            'title' => 'Wildflower Essential Oil',
            'description' => 'This organic essential oil with give you a feeling of freedom and connect with nature. In this oil, nature out everything you need to keep you fulfilled and happy with its smell. Some of the bottles are selled with little flowers inside of the them to keep them not only good smelling but undoubtedly beautiful.',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/cosmetic-oil-3197276_1280.jpg',
            'title' => 'Microfiber Towels',
            'description' => 'These towels will comfort you with their softness and ability to absorb water twice as fast as regular towel. Those towels last long, absorb water, not harm your skin and dry fast.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/bath-oil-2510783_1280.jpg',
            'title' => 'Herbal Oil',
            'description' => 'These oils made out of fresh herbs with make her skin look and feel better by giving it all natural vitamins it needs. The long lasting smell of a wid field with make you feel happy and pleased.',
            'price' => 10
        ]);
        $product->save();
    }
}
