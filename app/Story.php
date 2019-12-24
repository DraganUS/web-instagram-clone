<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fallible = [
      'img_url','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
