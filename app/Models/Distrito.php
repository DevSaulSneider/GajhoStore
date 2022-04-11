<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_provincia'
    ];

    public $timestamps = false;

    public function provincias() {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }
}
