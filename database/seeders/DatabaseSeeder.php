<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RastaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory([
            'email'=> 'user@user.com',
            'name' => 'user',
            'password' => '12345678'
        ])->create();
        User::factory(10)->create();
        $this->call(RastaSeeder::class);
    }
}
