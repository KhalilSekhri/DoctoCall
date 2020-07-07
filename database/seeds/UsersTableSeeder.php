<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'Admin',
            'firstname' => 'ADMIN',
            'email' => 'admin@admin.com',
            'phone' => '0000000000',
            'password' => Hash::make('password')
        ]);

        $docteur = User::create([
            'name' => 'Docteur',
            'firstname' => 'DOCTEUR',
            'email' => 'docteur@docteur.com',
            'Phone' => '1111111111',
            'password' => Hash::make('password')
        ]);

        $patient = User::create([
            'name' => 'Patient',
            'firstname' => 'PATIENT',
            'email' => 'patient@patient.com',
            'Phone' => '2222222222',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $docteurRole = Role::where('name', 'docteur')->first();
        $patientRole = Role::where('name', 'patient')->first();

        $admin->roles()->attach($adminRole);
        $docteur->roles()->attach($docteurRole);
        $patient->roles()->attach($patientRole);
    }
}
