<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ProductsTableSeeder::class,
          ]);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = "Admin2";
        $user->email = "admin2@devtest.com";
        $user->address = "amburguesa";
        $user->city = "olinda";
        $user->state = "pernambuco";
        $user->number = "175";
        $user->complement = "3 etapa";
        $user->zipCode = "53080320";
        $user->password = bcrypt('secret');
        $user->save();
    }
}

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => "MEN'S BETTER THAN NAKED & JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'count' => 0,
                'price' => 200.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "WOMEN'S BETTER THAN NAKED™ JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'count' => 0,
                'price' => 1600.21,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "WOMEN'S SINGLE-TRACK SHOE",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'count' => 0,
                'price' => 378.00,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Enduro Boa® Hydration Pack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'count' => 0,
                'price' => 21.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ]
        ];

        DB::table('products')->insert($products);
    }
}
