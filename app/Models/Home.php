<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'section',
        'content',
    ];

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
}
