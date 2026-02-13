<?php

namespace Database\Seeders;

use App\Models\Permession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class PermessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = Route::getRoutes();
        foreach($routes as $route){
            if (in_array($route->getName(),['LoginCreate','lougout',''])) {
                continue;
            }
            Permession::create([
                'name' => $route->getName(),
            ]);
        }
    }
}