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


    public function quil_question()
    {
      return  $this->hasMany('App\Models\QuilContQuestion','quilconct_id','id');
    }


    public function proofdetail()
    {

      return  $this->hasOne('App\Models\ProofreadDetail','proofread_id','id');
    
    }


    public function user()
    {
        return  $this->belongsTo('App\Models\User','user_id','id');
    }

    public function category()
    {
        return  $this->belongsTo('App\Models\category','cat_id','id');
    }
}
