<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'Atlas一郎',
            'mail' => 'atlas1@mail.com',
            'password' => bcrypt('my-secret-password')],
            ['username' => 'Atlas二郎',
            'mail' => 'atlas2@mail.com',
            'password' => bcrypt('my-secret-password')],
            ['username' => 'Atlas三郎',
            'mail' => 'atlas3@mail.com',
            'password' => bcrypt('my-secret-password')]
        ]);
    }
}
