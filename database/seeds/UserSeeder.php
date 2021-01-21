<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Google Admin',
                'email' => 'gadmin@hd.com',
                'password' => bcrypt('123'),
                'number' => '0817601123',
                'link' => 'https://google.com/',
                'role' => 'COMPANY'
            ],
            [
                'name' => 'Facebook Admin',
                'email' => 'fbadmin@hd.com',
                'password' => bcrypt('123'),
                'number' => '0817601124',
                'link' => 'https://facebook.com/',
                'role' => 'COMPANY'
            ],
            [
                'name' => 'Muhammad Donny Devanda',
                'email' => 'donny@hd.com',
                'password' => bcrypt('123'),
                'number' => '08176013215',
                'link' => 'https://donnydevanda.com/',
                'role' => 'USER'
            ],
            [
                'name' => 'Galuh Putra Warman',
                'email' => 'galuh@hd.com',
                'password' => bcrypt('123'),
                'number' => '08176012345',
                'link' => 'https://galuhputra.com/',
                'role' => 'USER'
            ],
            [
                'name' => 'Rico Kumala',
                'email' => 'rico@hd.com',
                'password' => bcrypt('123'),
                'number' => '08176012455',
                'link' => 'https://ricokumala.com/',
                'role' => 'USER'
            ],
            [
                'name' => 'Adinda Nur Syakira',
                'email' => 'adinda@hd.com',
                'password' => bcrypt('123'),
                'number' => '081760152123',
                'link' => 'https://adindans.com/',
                'role' => 'USER'
            ],
            [
                'name' => 'Darwin Samalo',
                'email' => 'darwin@hd.com',
                'password' => bcrypt('123'),
                'number' => '08176012277',
                'link' => 'https://darwinsamalo.com/',
                'role' => 'USER'
            ],
        ]);
    }
}
