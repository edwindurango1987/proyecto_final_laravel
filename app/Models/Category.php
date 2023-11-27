<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected  $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_description',
        'category_priority',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withTimestamps();
    }
}
