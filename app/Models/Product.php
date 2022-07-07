<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $category_id
 * @property $user_id
 * @property $name
 * @property $description
 * @property $quantity
 * @property $state
 * @property $price
 * @property $discount_price
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property PurchaseDetail[] $purchaseDetails
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'category_id' => 'required',
		'user_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'information' => 'required',
		'quantity' => 'required',
		'state' => 'required',
		'price' => 'required',
		'discount_price' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','user_id','name','description','information','quantity','state','price','discount_price','image', 'published', 'sold', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class,'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    

}
