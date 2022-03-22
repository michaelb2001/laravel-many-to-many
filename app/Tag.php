<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    /**
     * The roles that belong to the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
