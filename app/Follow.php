<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'following_id', 'follow_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }

//    dva metoda jedan za pracjene a drugi za pratioca

}


