<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// MODELOS
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // RELACIÓN UNO A MUCHOS (inversa - users)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // RELACIÓN UNO A MUCHOS (inversa - category)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // RELACIÓN MUCHOS A MUCHOS - tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // RELACIÓN POLIMÓRFICA UNO A UNO - con Image
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
