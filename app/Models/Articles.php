<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'category_id',
        'image_id',
        'slug',
        'title',
        'body',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function image()
    {
        return $this->belongsTo(Images::class, 'image_id', 'id');
    }
}
