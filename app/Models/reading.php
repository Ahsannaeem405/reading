<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reading extends Model
{
    use HasFactory;

    public function question()
    {

      return  $this->hasMany('App\Models\storyQuestion','story_id','id');
    }


    public function user()
    {

        return  $this->belongsTo('App\Models\User','user_id','id');
    }
}
