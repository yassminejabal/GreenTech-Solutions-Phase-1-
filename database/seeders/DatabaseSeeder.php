<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;
use App\Models\Categorie;

use Illuminate\Database\Eloquent\Model;

// use SebastianBergmann\FileIterator\Factory;


// use SebastianBergmann\FileIterator\Factory;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void

    {
        // User::factory(10)->create();php artisan make:factory ProduitFactory --model=Produit



        categorie::factory()->count(10)->create();
        Produit::factory()->count(10)->create();
    }
}
