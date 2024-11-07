<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function writer()
    {
    return $this->belongsTo(Writer::class);
    }
}
