<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable =
    [
        'name',
        'path',
    ];

    public function articles()
    {
        return $this->hasMany(Articles::class, 'image_id');
    }
}
