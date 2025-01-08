<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blog_name',
        'type',
        'title_1',
        'title_2',
        'paragraph_1',
        'paragraph_2',
        'paragraph_3',
        'date',
        'category',
        'customer_name',
        'advantages',
        'created_by',
        'testimonial_phara',
        'testimonial_name',
        'testimonial_by',
        'tags',
        'project_summary',
        'rating',
        'ordered_by',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'advantages' => 'array',
        'tags' => 'array',
        'date' => 'datetime:Y-m-d',
        'rating' => 'integer',
        'ordered_by' => 'integer',
    ];
}
