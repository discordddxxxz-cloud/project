<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\ReportSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            StatusSeeder::class,
            ReportSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'ASDASD',
            'email' => 'ASD@example.com',
        ]);
    }
}

