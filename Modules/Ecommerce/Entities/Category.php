<?php

namespace Modules\Ecommerce\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Ecommerce\Entities\Product;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'ecommerce_categories';
    
    protected static function newFactory()
    {
        return \Modules\Ecommerce\Database\factories\CategoryFactory::new();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
