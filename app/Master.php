<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'title', 'tag_line', 'hotline', 'path'
    ];
}
