<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    protected $fillable = ['breed_name', 'description', 'image_count', 'sample_image_url'];
}
