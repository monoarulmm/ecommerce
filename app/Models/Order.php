<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;

class Order extends Model
{
    use HasFactory;
    use Notifiable;


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
