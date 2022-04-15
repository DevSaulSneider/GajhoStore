<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'employee_id',
        'description',
        'image',
        'date',
    ];

    public function purchases() {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }

    public function employees() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
