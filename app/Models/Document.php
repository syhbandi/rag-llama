<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\Vector;

class Document extends Model
{
    protected $fillable = ['path', 'original_name', 'content', 'embedding'];
    protected $casts = [
        'embedding' => Vector::class,
    ];
}
