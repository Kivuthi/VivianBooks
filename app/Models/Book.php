<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publication_date',
        'language',
        'pages',
        'format',
        'isbn',
        'overview',
        'cover_image',
        'category',
        'status',
        'softCopyPrice',
        'hardCopyPrice',
        'rating'
    ];
}
