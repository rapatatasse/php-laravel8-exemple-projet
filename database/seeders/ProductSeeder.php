<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            ['title' => 'Platon Formation',
            'description' => 'Meilleur centre de formation du monde vous +',
            'short_notes' => 'contacter moi',
            'price' => 2000,
            'image' => 'https://www.platonformation.com/wp-content/uploads/2021/10/logo-platon-linkdigit.png',
            'slug' => ' votre expert en formation informatique, individuel ou en groupe pour les salariés',
            ]
        ]);
    }
}
