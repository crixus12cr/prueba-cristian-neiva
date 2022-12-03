<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experticia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='experticias';
    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function formularios () {
        return $this->hasMany(Formulario::class, 'experticias_id');
    }
}

