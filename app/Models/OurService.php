<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'paragraph_1',
        'paragraph_2',
        'icon',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];
}
