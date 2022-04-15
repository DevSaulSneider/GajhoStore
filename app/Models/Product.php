<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'description',
        'quantity',
        'state',
        'price',
        'discountPrice',
        'image',
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function purchase_details() {
        return $this->hasMany(PurchaseDetail::class, 'id');
    }

}
