<?php

use App\Specialitie;
use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialitie::truncate();
        DB::table('specialities')->truncate();
        
        Specialitie::create(['name' => 'Pyschologue']);
        Specialitie::create(['name' => 'Neurologue']);
        Specialitie::create(['name' => 'Psychiatre']);
        Specialitie::create(['name' => 'Généraliste']);
        Specialitie::create(['name' => 'Kiné']);
        Specialitie::create(['name' => 'Oméopath']);
        Specialitie::create(['name' => 'Charlat...enfin Naturopath']);
        Specialitie::create(['name' => 'Medecine Chinoise']);
        Specialitie::create(['name' => 'Dentiste']);
        Specialitie::create(['name' => 'Ophtalmologue']);

    }
}
