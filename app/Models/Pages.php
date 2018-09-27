<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
    protected $primaryKey = 'pages_id';
    //主索引鍵須獨立設置
    protected $fillable = [
        'name','title', 'content'
    ];
}
