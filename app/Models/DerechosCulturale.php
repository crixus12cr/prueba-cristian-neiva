<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DerechosCulturale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='derechos_culturales';
    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function formularios () {
        return $this->hasMany(Formulario::class, 'derechos_culturales_id');
    }
}
