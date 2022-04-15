<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastName',
        'phone',
        'email',
        'username',
        'password',
        'turn_id'
    ];

    public function turns() {
        return $this->belongsTo(Turn::class, 'turn_id');
    }
}
