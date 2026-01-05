<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dataset;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
// 1. Create the ADMIN Account
        User::create([
            'name' => 'Admin Boss',
            'email' => 'admin@horse.com',
            'password' => Hash::make('password123'), // Log in with this!
            'is_admin' => true
        ]);

        // 2. Create a REGULAR USER Account
        User::create([
            'name' => 'Regular Joe',
            'email' => 'user@horse.com',
            'password' => Hash::make('password123'), // Log in with this!
            'is_admin' => false
        ]);
        
        // 2. The 7 Breeds from Olga Belitskaya's Kaggle Dataset
        $breeds = [
            [
                'breed_name' => 'Akhal-Teke',
                'description' => 'A distinct metallic sheen and known as the "Golden Horse". Originating from Turkmenistan, they are known for speed and endurance.',
                'image_count' => 95,
                'sample_image_url' => 'https://medomed.org/wp-content/uploads/2022/08/Caballo-raza-akhal-Teke-1.jpg'
            ],
            [
                'breed_name' => 'Appaloosa',
                'description' => 'Best known for its colorful spotted coat pattern. Originally developed by the Nez Perce people in the US Pacific Northwest.',
                'image_count' => 120,
                'sample_image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-bB0YwUEzr7eifQDye7ULCNA5lTEepEZN-Q&s'
            ],
            [
                'breed_name' => 'Orlov Trotter',
                'description' => 'The most famous Russian horse breed. It is known for its fast trot and outstanding stamina.',
                'image_count' => 98,
                'sample_image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQutZENAE7QtYejFI8M2SgfD-TxX_IOo1QpDg&s'
            ],
            [
                'breed_name' => 'Vladimir Heavy Draft',
                'description' => 'A Russian breed of heavy draft horse. It was bred in the early 20th century for farm work and pulling heavy loads.',
                'image_count' => 85,
                'sample_image_url' => 'https://www.royal-horse.com/wp-content/uploads/2022/12/trait-vladimir-3.jpg'
            ],
            [
                'breed_name' => 'Percheron',
                'description' => 'A breed of draft horse that originated in the Huisne river valley in western France. Known for intelligence and willingness to work.',
                'image_count' => 110,
                'sample_image_url' => 'https://www.breyerhorses.com/cdn/shop/articles/percheron-596034_800x800.jpg?v=1616083476'
            ],
            [
                'breed_name' => 'Arabian',
                'description' => 'One of the oldest breeds in the world. Distinctive head shape and high tail carriage. Bred for endurance in the desert.',
                'image_count' => 150,
                'sample_image_url' => 'https://cdn.globetrotting.co/20210515082633/shutterstock_1320363314-e1621033372325.jpg'
            ],
            [
                'breed_name' => 'Friesian',
                'description' => 'Originated in Friesland, Netherlands. Known for its black coat and luxurious mane and tail.',
                'image_count' => 105,
                'sample_image_url' => 'https://www.equirider.fr/wp-content/uploads/2025/01/frison-cheval-histoire-sante-prix.webp'
            ],
        ];

        foreach ($breeds as $breed) {
            Dataset::create($breed);
        }
    }
}