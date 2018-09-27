<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $primaryKey = 'news_id';
    //主索引鍵須獨立設置
    protected $fillable = [
        'published_date','title', 'content'
    ];
}
