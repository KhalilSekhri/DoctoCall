<?php

use App\Role;
use App\User;
use App\Specialitie;
use App\Patient;
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
            'secu' => '1901293002225',
            'password' => Hash::make('admin')
        ]);

        $docteur = User::create([
            'name' => 'Docteur',
            'firstname' => 'DOCTEUR',
            'email' => 'docteur@docteur.com',
            'Phone' => '1111111111',
            'secu' => '1901293002235',
            'password' => Hash::make('docteur')
        ]);

        $patient = User::create([
            'name' => 'Patient',
            'firstname' => 'PATIENT',
            'email' => 'patient@patient.com',
            'Phone' => '2222222222',
            'secu' => '1903293002225',
            'password' => Hash::make('patient')
        ]);

        $docteur2 = User::create([
            'name' => 'BARNABE',
            'firstname' => 'Patrice',
            'email' => 'patrice@docteur.com',
            'Phone' => '2222222223',
            'secu' => '1911293002225',
            'password' => Hash::make('docteur')
        ]);

        $docteur3 = User::create([
            'name' => 'OLIVER',
            'firstname' => 'Twist',
            'email' => 'Oliver@docteur.com',
            'Phone' => '2222222224',
            'secu' => '1941293002225',
            'password' => Hash::make('docteur')
        ]);

        $docteur4 = User::create([
            'name' => 'CASASNOVAS',
            'firstname' => 'Thierry',
            'email' => 'Casasnovas@docteur.com',
            'Phone' => '2222222225',
            'secu' => '1951293002225',
            'password' => Hash::make('docteur'),
        ]);

        $patient2 = User::create([
            'name' => 'CHAPLINE',
            'firstname' => 'Charlie',
            'email' => 'Malade@patient.com',
            'Phone' => '2222222226',
            'secu' => '1801293002225',
            'password' => Hash::make('patient'),
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $docteurRole = Role::where('name', 'docteur')->first();
        $patientRole = Role::where('name', 'patient')->first();

        $psychologue = Specialitie::where('name', 'Psychologue');
        $charlatan = Specialitie::where('name', 'Charlat...enfin Naturopath');
        $ophtalmo = Specialitie::where('name', 'Ophtalmologue');
        $dentiste = Specialitie::where('name', 'Dentiste');

        $admin->roles()->attach($adminRole);
        $docteur->roles()->attach($docteurRole);
        $docteur2->roles()->attach($docteurRole);
        $docteur3->roles()->attach($docteurRole);
        $patient2->roles()->attach($patientRole);

        /*
        $docteur2->specialities()->attach($psychologue);
        $patient3->specialities()->attach($dentiste);
        $patient4->specialities()->attach($charlatan);
        */
        

        
    }
}
