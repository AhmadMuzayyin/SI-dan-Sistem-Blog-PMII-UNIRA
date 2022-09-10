<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        \App\Models\User::create([
            'username' => 'admin',
            'fullname' => 'Ahmad Muzayyin',
            'email' => 'komisariat@pmiiunira.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'phone' => '085155353793',
            'address' => 'Jl. Ceguk Stadion Ratu Pamellingan
        Kabupaten Pamekasan',
            'user_images' => 'profile-img.jpg',
            'role' => true
        ]);
        \App\Models\User::create([
            'username' => 'assyafii',
            'fullname' => 'Ahmad Muzayyin',
            'email' => 'assyafii@pmiiunira.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'phone' => '085155353793',
            'address' => 'Jl. Ceguk Stadion Ratu Pamellingan
        Kabupaten Pamekasan',
            'user_images' => 'profile-img.jpg',
            'role' => false
        ]);
        \App\Models\User::create([
            'username' => 'khalidbinwalid',
            'fullname' => 'Ahmad Muzayyin',
            'email' => 'khalidbinwalid@pmiiunira.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'phone' => '085155353793',
            'address' => 'Jl. Ceguk Stadion Ratu Pamellingan
        Kabupaten Pamekasan',
            'user_images' => 'profile-img.jpg',
            'role' => false
        ]);
        \App\Models\User::create([
            'username' => 'abuhanifah',
            'fullname' => 'Ahmad Muzayyin',
            'email' => 'abuhanifah@pmiiunira.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'phone' => '085155353793',
            'address' => 'Jl. Ceguk Stadion Ratu Pamellingan
        Kabupaten Pamekasan',
            'user_images' => 'profile-img.jpg',
            'role' => false
        ]);
        // \App\Models\Post::factory(100)->create();

        \App\Models\Category::create([
            'slug' => 'web-programming',
            'name' => 'Web Programming'
        ]);
        \App\Models\Category::create([
            'slug' => 'web-designer',
            'name' => 'Web Designer'
        ]);
        \App\Models\Tag::create([
            'slug_tag' => 'pmii-keren',
            'name_tag' => 'PMII KEREN'
        ]);
        \App\Models\Tag::create([
            'slug_tag' => 'pmii-unira-maju',
            'name_tag' => 'PMII UNIRA MAJU'
        ]);
        // for ($i = 0; $i < 10; $i++) {
        //     \App\Models\PostTag::create([
        //         'tag_id' => mt_rand(1, 2),
        //         'post_id' => mt_rand(1, 10)
        //     ]);
        // }

    }
}
