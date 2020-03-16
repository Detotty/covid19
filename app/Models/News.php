<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        "source",
        "title",
        "link",
        "guid",
        "thumbnail",
        "description",
        "published_at",
        "regional"
    ];
}

