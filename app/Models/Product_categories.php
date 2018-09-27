<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product_categories extends Model
{
    //
    protected $primaryKey = 'product_categories_id';
    //主索引鍵須獨立設置
    protected $fillable = [
        'published_date','category',
    ];
}
