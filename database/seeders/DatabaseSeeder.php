<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Adham Ilyas',
            'username' => 'adhamilyas',
            'email' => 'adhamilyas@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Tournaments',
            'slug' => 'tournaments',        
        ]);

        Category::create([
            'name' => 'Esports',
            'slug' => 'esport',        
        ]);

        Category::create([
            'name' => 'Game News',
            'slug' => 'game-news',        
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul 1',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-1',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit odio vel et quisquam ratione, voluptas quibusdam quis quo quas consectetur obcaecati quod sint provident cum, illo id recusandae. Hic quae repellendus provident quasi assumenda laborum tempora in aspernatur architecto fugit maiores aperiam rem sint natus, perspiciatis cum dolorem inventore sapiente expedita fuga libero dolore, illo aliquid adipisci?</p> <p>Vero deserunt minus quos in velit iure perferendis asperiores saepe voluptatem eius id, pariatur tempora itaque quis non odio consequatur tenetur facilis provident voluptatibus magnam! Rerum officia enim accusamus tenetur culpa temporibus, ut ex? Vero nulla odit est, tenetur tempora, ea facere ad possimus architecto nihil doloribus quae asperiores officiis repudiandae suscipit veritatis sunt porro.</p> <p>Sunt tempora sit inventore, eos odit suscipit sapiente, vel nisi voluptate nemo, reprehenderit similique animi quos labore ad exercitationem officia! Eligendi id, ipsum molestiae mollitia officiis natus ut alias cumque. Exercitationem dolor voluptatum ad consectetur quos culpa mollitia?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul 2',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-2',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit odio vel et quisquam ratione, voluptas quibusdam quis quo quas consectetur obcaecati quod sint provident cum, illo id recusandae. Hic quae repellendus provident quasi assumenda laborum tempora in aspernatur architecto fugit maiores aperiam rem sint natus, perspiciatis cum dolorem inventore sapiente expedita fuga libero dolore, illo aliquid adipisci?</p> <p>Vero deserunt minus quos in velit iure perferendis asperiores saepe voluptatem eius id, pariatur tempora itaque quis non odio consequatur tenetur facilis provident voluptatibus magnam! Rerum officia enim accusamus tenetur culpa temporibus, ut ex? Vero nulla odit est, tenetur tempora, ea facere ad possimus architecto nihil doloribus quae asperiores officiis repudiandae suscipit veritatis sunt porro.</p> <p>Sunt tempora sit inventore, eos odit suscipit sapiente, vel nisi voluptate nemo, reprehenderit similique animi quos labore ad exercitationem officia! Eligendi id, ipsum molestiae mollitia officiis natus ut alias cumque. Exercitationem dolor voluptatum ad consectetur quos culpa mollitia?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul 3',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-3',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit odio vel et quisquam ratione, voluptas quibusdam quis quo quas consectetur obcaecati quod sint provident cum, illo id recusandae. Hic quae repellendus provident quasi assumenda laborum tempora in aspernatur architecto fugit maiores aperiam rem sint natus, perspiciatis cum dolorem inventore sapiente expedita fuga libero dolore, illo aliquid adipisci?</p> <p>Vero deserunt minus quos in velit iure perferendis asperiores saepe voluptatem eius id, pariatur tempora itaque quis non odio consequatur tenetur facilis provident voluptatibus magnam! Rerum officia enim accusamus tenetur culpa temporibus, ut ex? Vero nulla odit est, tenetur tempora, ea facere ad possimus architecto nihil doloribus quae asperiores officiis repudiandae suscipit veritatis sunt porro.</p> <p>Sunt tempora sit inventore, eos odit suscipit sapiente, vel nisi voluptate nemo, reprehenderit similique animi quos labore ad exercitationem officia! Eligendi id, ipsum molestiae mollitia officiis natus ut alias cumque. Exercitationem dolor voluptatum ad consectetur quos culpa mollitia?</p>'
        // ]);
    }
}
