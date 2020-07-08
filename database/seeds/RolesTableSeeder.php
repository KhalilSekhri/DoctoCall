<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        DB::table('roles')->truncate();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'docteur']);
        Role::create(['name' => 'patient']);
    }
}
