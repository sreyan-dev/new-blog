<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'slug',
        'author_id'
    ];

    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
