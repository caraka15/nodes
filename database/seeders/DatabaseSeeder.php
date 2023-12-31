<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Chaind;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory(5)->create();
        
        User::create([
            'name' => 'Caraka',
            'email' => 'carakawidi07@gmail.com',
            'username' => 'caraka15',
            'password' => bcrypt('caraka'),
            'is_admin' => true
        ]);

        Chaind::create([
            'type' => 'Mainnet',
            'name' => 'Planq',
            'slug' => 'planq',
            'logo' => 'planq.jpg',
            'guide_link' => 'planq.md',
            'rpc_link' => 'https://rpc.planq.crxa.my.id',
            'stake_link' => 'https://explorer.tcnetwork.io/planq/validator/plqvaloper16cfuq9d8nv2yrfzl409xkk6w0s4mq9asad5c47',
        ]);

        Chaind::create([
            'type' => 'Testnet',
            'name' => 'Mande',
            'slug' => 'mande',
            'logo' => 'mande.png',
            'guide_link' => 'mande.md',
            'rpc_link' => 'https://rpc.mande.crxa.my.id',
            'stake_link' => 'https://explorer.tcnetwork.io/planq/validator/plqvaloper16cfuq9d8nv2yrfzl409xkk6w0s4mq9asad5c47',
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, reiciendis!',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aspernatur aliquid vitae, id nam maiores</p> <dolore>quae sit consequatur libero modi iusto amet magnam ea quisquam numquam eius ab voluptas dolor voluptatibus? Iste distinctio dolore rerum eum consectetur maiores eius omnis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, reiciendis!',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aspernatur aliquid vitae, id nam maiores</p> <dolore>quae sit consequatur libero modi iusto amet magnam ea quisquam numquam eius ab voluptas dolor voluptatibus? Iste distinctio dolore rerum eum consectetur maiores eius omnis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, reiciendis!',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt aspernatur aliquid vitae, id nam maiores</p> <dolore>quae sit consequatur libero modi iusto amet magnam ea quisquam numquam eius ab voluptas dolor voluptatibus? Iste distinctio dolore rerum eum consectetur maiores eius omnis.</p>'
        // ]);

    }
}