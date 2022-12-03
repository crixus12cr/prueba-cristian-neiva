<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nac extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='nacs';
    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function formularios () {
        return $this->hasMany(Formulario::class, 'nacs_id');
    }
}
