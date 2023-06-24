<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',
        'title' ,
        'slug',
        'shop',

        'category',
        'SKU',
        'product',
        'stock_status',
        'featured',
        'quantity',
        'return',
        'color',
        'size',
        'warranty',
        'authentic',
        'tag',
        'regular_price',
        'sale_price',
        'sale_percent',
        'description',
        'image',
        'img',
        'images',
        
   
        ];
      
        protected $table = 'products';
                   
 
 

    
    use Sluggable;

    public function Sluggable():array
    {
        return[
            'slug'=>
            [
                'source'=> 'product'
            ]
        ];
    }

}
