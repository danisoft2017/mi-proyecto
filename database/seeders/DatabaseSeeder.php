<?php

namespace Database\Seeders;
use App\Models\Clientes;
use App\Models\Producto;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Clientes::factory(10)->create();
        Producto::factory(10)->create();
    }
}
