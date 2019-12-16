<?php

use Illuminate\Database\Seeder;

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
            'category_id' => 1,
            'imagePath' => 'images/products/oil.jpg',
            'title' => 'Soyabin Oil',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '100'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/ponds.jpg',
            'title' => 'Ponds Lotion',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '90'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/radhuni.jpg',
            'title' => 'Radhuni Mosla',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '45'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/salt.jpg',
            'title' => 'Aci Pure Salt',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '33'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/tisu.jpg',
            'title' => 'Bosundhora Tisu',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '53'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/tea.jpg',
            'title' => 'Ispahani Mirjapur Tea',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '78'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/murgi.jpg',
            'title' => 'Meat',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '187'
        ]);
        $product->save();

        $product = new \App\Product([
            'category_id' => 1,
            'imagePath' => 'images/products/vim.jpg',
            'title' => 'Vim Soap',
            'Description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A',
            'price' => '50'
        ]);
        $product->save();
    }
}
