<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryPost extends Pivot
{
    //
    protected $fillable = [ 'category_id', 'post_id' ];

    public $timestamps = false;
}
