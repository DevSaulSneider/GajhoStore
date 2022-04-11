<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id'
    ];

    public $timestamps = false;

    public function departments() {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function districts() {
        return $this->hasMany(District::class, 'id');
    }
}
