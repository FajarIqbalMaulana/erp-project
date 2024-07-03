<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Define permissions
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);
        Permission::create(['name' => 'add-data']);
        Permission::create(['name' => 'edit-data']);
        Permission::create(['name' => 'delete-data']);
        Permission::create(['name' => 'view-data']);

        // Define roles
        Role::create(['name' => "Super Admin"]);
        Role::create(['name' => "Direksi"]);
        Role::create(['name' => "Manager"]);
        Role::create(['name' => "Kepala"]);
        Role::create(['name' => "Staff"]);

        // Assign permissions to roles
        $roleSuperAdmin = Role::findByName("Super Admin");
        $roleSuperAdmin->syncPermissions([
            'add-user', 'edit-user', 'delete-user', 'view-user',
            'add-data', 'edit-data', 'delete-data', 'view-data',
        ]);

        $roleDireksi = Role::findByName("Direksi");
        $roleDireksi->syncPermissions([
            'view-data',
        ]);

        $roleManager = Role::findByName("Manager");
        $roleManager->syncPermissions([
            'view-data',
        ]);

        $rolekepala = Role::findByName("Kepala");
        $rolekepala->syncPermissions([
            'add-data', 'edit-data', 'view-data',
        ]);

        $roleStaff = Role::findByName("Staff");
        $roleStaff->syncPermissions([
            'add-user', 'delete-user', 'view-user',
            'add-data', 'delete-data', 'view-data',
        ]);

        // Create a Super Admin user and assign to a team
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'phone' => '+6281234567890',
            'email' => 'superadmin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change to your desired password
            'remember_token' => Str::random(10),
        ]);

        // Create a Super Admin user
        $superAdminTeam = Team::create([
            'name' => $superAdmin->name . ' Team',
            'user_id' => $superAdmin->id,
            'personal_team' => true,
        ]);

        $superAdmin->current_team_id = $superAdminTeam->id;
        $superAdmin->save();

        $superAdmin->assignRole('Super Admin');

        // Create a Direksi user
        $direksi = User::create([
            'name' => 'Direksi',
            'username' => 'direksi',
            'phone' => '+6282345678901',
            'email' => 'direksi@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change to your desired password
            'remember_token' => Str::random(10),
        ]);

        $direksiTeam = Team::create([
            'name' => $direksi->name . ' Team',
            'user_id' => $direksi->id,
            'personal_team' => true,
        ]);

        $direksi->current_team_id = $direksiTeam->id;
        $direksi->save();

        $direksi->assignRole('Direksi');

        // Create a Manager user
        $manager = User::create([
            'name' => 'Manager',
            'username' => 'manager',
            'phone' => '+6283456789012',
            'email' => 'manager@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change to your desired password
            'remember_token' => Str::random(10),
        ]);

        $managerTeam = Team::create([
            'name' => $manager->name . ' Team',
            'user_id' => $manager->id,
            'personal_team' => true,
        ]);

        $manager->current_team_id = $managerTeam->id;
        $manager->save();

        $manager->assignRole('Manager');

        // Create a Kepala user
        $kepala = User::create([
            'name' => 'Kepala',
            'username' => 'kepala',
            'phone' => '+6284567890123',
            'email' => 'kepala@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change to your desired password
            'remember_token' => Str::random(10),
        ]);

        $kepalaTeam = Team::create([
            'name' => $kepala->name . ' Team',
            'user_id' => $kepala->id,
            'personal_team' => true,
        ]);

        $kepala->current_team_id = $kepalaTeam->id;
        $kepala->save();

        $kepala->assignRole('Kepala');

        // Create a Staff user
        $staff = User::create([
            'name' => 'Staff',
            'username' => 'staff',
            'phone' => '+6285678901234',
            'email' => 'staff@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change to your desired password
            'remember_token' => Str::random(10),
        ]);

        $staffTeam = Team::create([
            'name' => $staff->name . ' Team',
            'user_id' => $staff->id,
            'personal_team' => true,
        ]);

        $staff->current_team_id = $staffTeam->id;
        $staff->save();

        $staff->assignRole('Staff');
    }
}
