<?php

namespace Database\Seeders;

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
        $this->call(RbacSeeder::class);

        $super = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
        ]);

        if (method_exists($super, 'assignRole')) {
            $super->assignRole('super-admin');
        }

        $support = User::factory()->create([
            'name' => 'Support User',
            'email' => 'support@example.com',
        ]);

        if (method_exists($support, 'assignRole')) {
            $support->assignRole('support');
        }

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        if (method_exists($user, 'assignRole')) {
            $user->assignRole('user');
        }

        $this->call(BlogPostSeeder::class);
    }
}
