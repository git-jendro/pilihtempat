<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageRule extends Model
{
    protected $fillable = [
        'venue_id', 'image_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
