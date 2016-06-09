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

    /**
     * The parent that belong to the categorie.
     */
    public function parent()
    {
        return $this->belongsTo('App\Entity\Category', 'parent_id');
    }

    /**
     * The videos that belong to the video.
     */
    public function children()
    {
        return $this->hasMany('App\Entity\Category');
    }
}
