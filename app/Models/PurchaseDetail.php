<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'purchase_id',
        'product_id',
        'image',
        'name',
        'price',
        'quantity',
        'discount_price',
        'subtotal',
    ];

    public function users() {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function purchases() {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }
    
    public function products() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
