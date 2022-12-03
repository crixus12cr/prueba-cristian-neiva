<?php

namespace Database\Seeders;

use App\Models\DerechosCulturale;
use Illuminate\Database\Seeder;

class derechosCulturalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $derechosCulturales = [
           'Identidad y patrimonios',
           'Referencias a comunidades culturales',
           'Acceso y participacion en la vida cultural',
           'Educacion y formacion',
           'Informacion y comunicacion',
           'Cooperacion cultural'
        ];

        foreach ($derechosCulturales as $value) {
            $nuevo = new DerechosCulturale();
            $nuevo->nombre=$value;
            $nuevo->estado=true;
            $nuevo->save();
        }
    }
}
