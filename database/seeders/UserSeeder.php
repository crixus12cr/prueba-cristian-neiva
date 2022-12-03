<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'Karem lopez',
            'Alberto Roman',
            'Elvia Tulia'
        ];

        foreach ($users as $value) {
            $nuevo = new User();
            $nuevo->nombre=$value;
            $nuevo->estado=true;
            $nuevo->save();
        }
    }
}
