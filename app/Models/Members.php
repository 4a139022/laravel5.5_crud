<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $primaryKey = 'members_id';
    //主索引鍵須獨立設置
    protected $fillable = [
        'published_date','account','password',
        'name','gender','address',
        'email','phone','birthday','mobile',
        'zipcode','country','district',
        'status','money', 'content',
    ];
}
