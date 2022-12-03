<?php

namespace Database\Seeders;

use App\Models\Nac;
use Illuminate\Database\Seeder;

class nacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nac = [
            'ALCALA',
            'ANDALUCIA',
            'ANSERMANUEVO',
            'ARGELIA',
            'BOLIVAR',
            'BUENAVENTURA',
            'BUGA'
        ];

        foreach ($nac as $value) {
            $nuevo = new Nac();
            $nuevo->nombre=$value;
            $nuevo->estado=true;
            $nuevo->save();
        }
    }
}
