<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{

    use Sluggable;


    public function Sluggable():array
    {
        return[
            'slug'=>
            [
                'source'=> 'title'
            ]
        ];
    }

    use HasFactory;

    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',

        'title' ,
        'slug',
        'image',
        
   
        ];
      
        protected $table = 'categories';


}
