<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $table = 'breeds';
    
    protected $fillable = [
        'breed_name', 
        'description', 
        'image_count', 
        'sample_image_url'
    ];
}