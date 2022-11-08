<?php

namespace Database\Seeders;

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
         \App\Models\User::create(
             [
                'name' => 'angan2',
                 'email' => 'angan2@gmail.com',
                 'password' => bcrypt('12345')
             ]
         );
    }
}
