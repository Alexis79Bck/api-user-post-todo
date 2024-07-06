<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->has(UserProfile::factory()->count(1), 'profile')
            ->has(Post::factory()->count(mt_rand(3, 12)))
            ->create([
                'name' => 'Testing User',
                'username' => 'tester01',
                'email' => 'tester_01@example.com',
                'password' => Hash::make('secreto1234'),
                'remember_token' => Str::random(10),
            ]);

        User::factory(25)
            ->has(UserProfile::factory()->count(1), 'profile')
            ->has(Post::factory()->count(mt_rand(3, 12)))
            ->create();
    }
}
