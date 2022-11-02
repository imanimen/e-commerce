<?php

namespace Modules\Ecommerce\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Ecommerce\Entities\Category;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table   = ['ecommerce_products'];
    
    protected static function newFactory()
    {
        return \Modules\Ecommerce\Database\factories\ProductFactory::new();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
