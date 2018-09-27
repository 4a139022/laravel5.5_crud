<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Products extends Model
{
    //
    protected $primaryKey = 'products_id';
    //主索引鍵須獨立設置
    protected $fillable = [
        'product_categories_id','picture','name','description','price',
    ];
}
