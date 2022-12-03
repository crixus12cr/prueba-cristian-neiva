<?php

namespace Database\Seeders;

use App\Models\Experticia;
use Illuminate\Database\Seeder;

class experticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experticia = [
            'Artes plasticas',
            'Teatro',
            'Musica',
            'Danza',
            'Cocina tradicional',
            'Juegos tradicionales',
            'Promocion de lectura',
        ];

        foreach ($experticia as $value) {
            $nuevo = new Experticia();
            $nuevo->nombre=$value;
            $nuevo->estado=true;
            $nuevo->save();
        }
    }
}
