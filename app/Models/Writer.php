<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $guarded = [];

    public function category()
    {
    return $this->belongsTo(Category::class);
    }

    public function article()
    {
    return $this->hasMany(Article::class);
    }
}
