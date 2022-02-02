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
        // rasta::factory()->create([
        //     'name'=>'rastas',
        //     'title'=>'man with dreads',
        //     'location'=>'Bariloche',
        //     'description'=>'cabeza completa',
        //     'img'=>'https://cdn.palbincdn.com/users/10670/images/jassir-jonis-xwz84heqHxE-unsplash_opt-1592333980.jpg'
        // ]);
        rasta::factory(10)->create();
    }
}
