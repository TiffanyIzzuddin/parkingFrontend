<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create(['name' => 'Item 1', 'description' => 'Description 1', 'status' => 'available']);
        Item::create(['name' => 'Item 2', 'description' => 'Description 2', 'status' => 'unavailable']);
        Item::create(['name' => 'Item 3', 'description' => 'Description 1', 'status' => 'available']);
        Item::create(['name' => 'Item 4', 'description' => 'Description 2', 'status' => 'unavailable']);
        Item::create(['name' => 'Item 5', 'description' => 'Description 1', 'status' => 'available']);
        Item::create(['name' => 'Item 6', 'description' => 'Description 2', 'status' => 'unavailable']);
        Item::create(['name' => 'Item 7', 'description' => 'Description 1', 'status' => 'available']);
        Item::create(['name' => 'Item 8', 'description' => 'Description 2', 'status' => 'unavailable']);
        // Add more items as needed
    }
}
