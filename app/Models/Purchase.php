<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_method_id',
        'total',
        'payment_date',
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment_methods() {
        return $this->belongsTo(PaymentMethod::class, 'payment_methods_id');
    }
}
