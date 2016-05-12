<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get the speaker that owns the video.
     */
    public function speaker()
    {
        return $this->belongsTo('App\Entity\Speaker');
    }

    /**
     * The categories that belong to the video.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Entity\Category');
    }
}
