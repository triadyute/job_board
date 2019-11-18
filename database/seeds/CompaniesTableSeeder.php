<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Company A'
        ]);
        Company::create([
            'name' => 'Company B'
        ]);
        Company::create([
            'name' => 'Company C'
        ]);
        Company::create([
            'name' => 'Company D'
        ]);
        Company::create([
            'name' => 'Company E'
        ]);
        Company::create([
            'name' => 'Company F'
        ]);
        Company::create([
            'name' => 'Company G'
        ]);
        Company::create([
            'name' => 'Company H'
        ]);
        Company::create([
            'name' => 'Company I'
        ]);
        Company::create([
            'name' => 'Company J'
        ]);
    }
}
