<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $with = ['images'];

    protected  $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'fk_category_id',
        'product_stock',
        'product_status',
        'product_image'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class)
            ->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    } 

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
