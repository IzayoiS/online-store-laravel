<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'users_id', 'categories_id', 'price', 'description', 'slug'
    ];

    protected $hidden = [

    ];

    public function galleries() 
    {
        return $this->hasMany(ProductGallery::class,'products_id', 'id');
    }
    public function user() 
    {
        return $this->hasOne(User::class,'id', 'users_id');
    }
    public function category() 
    {
        return $this->belongsTo(Category::class,'categories_id', 'id');
    }
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '$ ' . number_format($value, 0, ',', '.'),
            set: fn ($value) => (int) str_replace(['$', ' ', '.', ','], '', $value),
        );
    }

}
