<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'first_name' => 'Arjun',
            'last_name' => 'Das',
            'email' => 'arjundasp@gmail.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
