<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['name' => 'Margherita Pizza', 'description' => 'Classic pizza with tomato, mozzarella and basil', 'price' => 8.50, 'is_available' => true],
            ['name' => 'Caesar Salad', 'description' => 'Romaine, parmesan, croutons and Caesar dressing', 'price' => 6.75, 'is_available' => true],
            ['name' => 'Spaghetti Bolognese', 'description' => 'Spaghetti with rich meat sauce', 'price' => 9.50, 'is_available' => true],
            ['name' => 'Grilled Salmon', 'description' => 'Served with seasonal vegetables', 'price' => 14.00, 'is_available' => false]
        ];

        foreach ($items as $item) {
            MenuItem::create($item);
        }
    }
}
