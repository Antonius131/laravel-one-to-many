<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'article_text',
        'date',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
