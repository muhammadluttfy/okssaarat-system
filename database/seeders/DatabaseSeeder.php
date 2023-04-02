<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Status;
use App\Models\Employee;
use App\Models\Departement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::insert([
            [
                'name' => 'Administrator',
                'slug' => 'administrator',
            ],
            [
                'name' => 'Produksi',
                'slug' => 'produksi',
            ],
            [
                'name' => 'Finance',
                'slug' => 'finance',
            ],
        ]);

        User::insert([
            [
                'role_id' => '1',
                'name' => 'Damirich Team',
                'email' => 'development@damirich.id',
                'password' => bcrypt('password.'),
            ],
            [
                'role_id' => '2',
                'name' => 'Produksi Team',
                'email' => 'produksi@okssaart.com',
                'password' => bcrypt('PRODUKSI@okssaart.com'),
            ],
            [
                'role_id' => '3',
                'name' => 'Finance Team',
                'email' => 'finance@okssaart.com',
                'password' => bcrypt('FINANCE@okssaart.com'),
            ],
        ]);

        Status::insert([
            [
                'name' => 'Start',
            ],
            [
                'name' => 'Process',
            ],
            [
                'name' => 'Finish',
            ],
        ]);

        Departement::insert([
            [
                'name' => 'Produksi',
                'slug' => 'produksi',
            ],
            [
                'name' => 'Finance & Accounting',
                'slug' => 'finance-accounting',
            ],
        ]);

        Employee::insert([
            [
                'name' => 'Kiswanto',
            ],
            [
                'name' => 'Yulli',
            ],
            [
                'name' => 'Budi',
            ],
        ]);
    }
}
