<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The videos that belong to the video.
     */
    public function videos()
    {
        return $this->belongsToMany('App\Entity\Video');
    }
}
