<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'email',
        'user_id',
        'sale_percent',
        'regular_price',
        'sale_price',
        'product',
        'slug',
        'product_id',
        'images',
        'image',
   
        ];
      
        protected $table = 'wishlists';


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
