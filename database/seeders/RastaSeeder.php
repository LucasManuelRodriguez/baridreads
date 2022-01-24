<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rasta;

class RastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rasta::factory(10)->create();
    }
}
