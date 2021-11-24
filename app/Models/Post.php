<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'women_id',
        'title',
        'body',
    ];

    public function women()
    {
        return $this->belongsTo(Women::class);
    }

    public function getImageUrlAttribute()
    {
        return Storage::url('images/posts/' . $this->image);
    }
}
