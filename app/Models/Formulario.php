<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formulario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='formularios';
    protected $fillable = [
        'consecutivo',
        'users_id',
        'derechos_culturales_id',
        'nacs_id',
        'fecha',
        'hora_inicio',
        'hora_final',
        'experticias_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function derechos_culturales()
    {
        return $this->belongsTo(DerechosCulturale::class);
    }
    public function nacs()
    {
        return $this->belongsTo(Nac::class);
    }
    public function experticias()
    {
        return $this->belongsTo(Experticia::class);
    }
}
