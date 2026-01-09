<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    // We explicitly define the table name to avoid confusion
    protected $table = 'breeds';
    
    protected $fillable = [
        'breed_name', 
        'description', 
        'image_count', 
        'sample_image_url'
    ];
}