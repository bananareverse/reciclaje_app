<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logro extends Model
{
    use HasFactory;

    protected $table = 'logro';
    protected $primaryKey = 'id_logro';
    public $timestamps = false;

    protected $fillable = ['puntos', 'nombre', 'descripcion'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_logro', 'id_logro', 'id_usuario')
                    ->withPivot('fecha_obtencion');
    }
}