<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'type',
        'title_1',
        'title_2',
        'paragraph_1',
        'paragraph_2',
        'start_date',
        'end_date',
        'category',
        'customer_name',
        'advantages',
        'project_summary',
        'rating',
        'ordered_by',
    ];

    protected $casts = [
        'advantages' => 'array', // Automatically cast 'advantages' to an array
    ];
}
