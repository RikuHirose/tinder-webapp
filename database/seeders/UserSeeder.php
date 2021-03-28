<?php
namespace Database\Seeders;

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
        \DB::table('users')->insert([
            [
              'name'              => 'tester',
              'email'             => 'tester@tester.com',
              'email_verified_at' => now(),
              'password'          => \Hash::make('test'),
              'img_url'           => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80%20750w',
            ],
            [
              'name'              => 'tester1',
              'email'             => 'tester1@tester.com',
              'email_verified_at' => now(),
              'password'          => \Hash::make('test'),
              'img_url'           => 'https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80',
            ],

            [
              'name'              => 'tester2',
              'email'             => 'tester2@tester.com',
              'email_verified_at' => now(),
              'password'          => \Hash::make('test'),
              'img_url'           => 'https://images.unsplash.com/photo-1552058544-f2b08422138a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=344&q=80',
            ],

            [
              'name'              => 'tester3',
              'email'             => 'tester3@tester.com',
              'email_verified_at' => now(),
              'password'          => \Hash::make('test'),
              'img_url'           => 'https://images.unsplash.com/photo-1491349174775-aaafddd81942?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80 334w',
            ],

            [
              'name'              => 'tester4',
              'email'             => 'tester4@tester.com',
              'email_verified_at' => now(),
              'password'          => \Hash::make('test'),
              'img_url'           => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80 334w',
            ],
        ]);
    }
}
