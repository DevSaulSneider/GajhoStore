<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'id_departamento'
    ];

    public $timestamps = false;

    public function departamentos() {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function distritos() {
        return $this->hasMany(Distrito::class, 'id');
    }
}
