<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'=>'Eduardo Delgado',
            'email'=>'eduardodelgadode2@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verifed_at'=>time()
        ]);
        
        Project::factory()
            ->count(21)
            ->hasTasks(30)
            ->create();
    }
}
