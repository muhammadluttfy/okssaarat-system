<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Status;
use App\Models\Employee;
use App\Models\FinancePo;
use App\Models\ProgressPo;
use App\Models\Departement;
use App\Models\MarketingPo;
use App\Models\ProductionPo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::insert([
            [
                'departement_id' => '1',
                'name' => 'Tim Produksi',
                'email' => 'produksi@okssaart.com',
                'password' => bcrypt('PRODUKSI@okssaart.com'),
            ],
            [
                'departement_id' => '2',
                'name' => 'Tim Finance',
                'email' => 'finance@okssaart.com',
                'password' => bcrypt('FINANCE@okssaart.com'),
            ],
            [
                'departement_id' => '3',
                'name' => 'Tim Marketing',
                'email' => 'marketing@okssaart.com',
                'password' => bcrypt('MARKETING@okssaart.com'),
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
            [
                'name' => 'Sales & Marketing',
                'slug' => 'sales-marketing',
            ],
        ]);

        Employee::insert([
            [
                'name' => 'Kiswanto',
            ],
            [
                'name' => 'Yuli',
            ],
            [
                'name' => 'Budi',
            ],
            [
                'name' => 'Murjiyanto',
            ],
            [
                'name' => 'Dwi',
            ],
            [
                'name' => 'Leony',
            ],
            [
                'name' => 'Maxum',
            ],
        ]);

        ProductionPo::insert([
            [
                'name' => 'Printing',
            ],
            [
                'name' => 'Finishing',
            ],
            [
                'name' => 'Packaging',
            ],
            [
                'name' => 'Delifery',
            ],
        ]);

        FinancePo::insert([
            [
                'name' => 'Procurement (Purchasing)',
            ],
            [
                'name' => 'Payment',
            ],
        ]);

        MarketingPo::insert([
            [
                'name' => 'Create & Release PO',
            ],
            [
                'name' => 'Product Receive',
            ],
        ]);

        ProgressPo::insert([
            [
                'name' => 'Printing',
            ],
            [
                'name' => 'Finishing',
            ],
            [
                'name' => 'Packaging',
            ],
            [
                'name' => 'Delivery',
            ],


            [
                'name' => 'Create & Release PO',
            ],
            [
                'name' => 'Product Receive',
            ],


            [
                'name' => 'Procurement (Purchasing)',
            ],
            [
                'name' => 'Payment',
            ],
        ]);
    }
}
