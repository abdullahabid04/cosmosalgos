<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // ── Create the three roles ───────────────────────────────────────
        $superAdmin = Role::firstOrCreate([
            'name'       => 'super_admin',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name'       => 'editor',
            'guard_name' => 'web',
        ]);

        Role::firstOrCreate([
            'name'       => 'author',
            'guard_name' => 'web',
        ]);

        // ── Create the first super admin account ─────────────────────────
        $user = User::firstOrCreate(
            ['email' => 'admin@cosmosalgos.com'],
            [
                'name'              => 'Abdullah Abid',
                'password'          => Hash::make('CosmosAdmin@2026'),
                'email_verified_at' => now(),
            ]
        );

        $user->assignRole($superAdmin);

        $this->command->info('');
        $this->command->info('  ✓  Super admin account created.');
        $this->command->info('     Email   : admin@cosmosalgos.com');
        $this->command->info('     Password: CosmosAdmin@2026');
        $this->command->warn('  ⚠  Change the password immediately after first login.');
        $this->command->info('');
    }
}
