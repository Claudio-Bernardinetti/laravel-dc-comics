<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;

    //protected $table = "light_sabers";

    protected $fillable = ['title', 'thumb', 'description', 'price'];

    /* protected function thumb(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if (strstr($value, 'http') !== false) {
                    return $value;
                } else {
                    return asset('storage/' .$value);
                }
            }
        ); 
    } */

}
