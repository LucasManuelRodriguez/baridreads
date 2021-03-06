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
        User::factory([
            'name'=>'Rodriguez',
            'email'=>'rodriguez.m.lucas@gmail.com',
            'is_admin'=>true,
        ])->create();
        // User::factory(10)->create();
        $this->call(RastaSeeder::class);
    }
}
