<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)
        ->hasPosts(2, function (array $attributes, User $user) {
            return [
                'title' => $user->name,
                'content' => 'Hellow World',
                'description' => '',
            ];
        })
        ->create();
    }
}
