<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'path'
    ];

    public function rules()
    {
        return $this->hasMany(ImageRule::class);
    }
}
