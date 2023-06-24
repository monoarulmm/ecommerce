<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'email',
        'phone',
        'address',
        'user_id',
        'product',
        'slug',
        'price',
        'product_title',
        'product_id',
    
    
        'quantity',
        'subtotal',
        'image',
   
        ];
      
        protected $table = 'carts';

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
