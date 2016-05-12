<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    /**
     * Get the videos for the speaker.
     */
    public function videos()
    {
        return $this->hasMany('App\Entity\Video');
    }
}
