<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'content',

    ];

    public function likes()
    {
        return $this->morphMany(Like::class, "likeable");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getImagesAttribute()
    {
        return collect(json_decode($this->attributes['images'], true)) ?? null;
    }


    public function setImagesAttribute($value)
    {
        addSlashToImagePath($value);

        $this->attributes['images'] = json_encode($value);
        return $this;
    }

}
