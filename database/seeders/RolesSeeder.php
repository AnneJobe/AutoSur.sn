<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Client',
                'slug' => 'client',
                'description' => 'Utilisateur particulier de la plateforme.',
            ],
            [
                'name' => 'Administrateur',
                'slug' => 'admin',
                'description' => 'Gestionnaire autorise de la plateforme.',
            ],
            [
                'name' => 'Garage',
                'slug' => 'garage',
                'description' => 'Partenaire garage valide.',
            ],
            [
                'name' => 'Depanneur',
                'slug' => 'depanneur',
                'description' => 'Partenaire de depannage valide.',
            ],
            [
                'name' => 'Assureur',
                'slug' => 'assureur',
                'description' => 'Partenaire assurance valide.',
            ],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['slug' => $role['slug']],
                $role
            );
        }
    }
}
