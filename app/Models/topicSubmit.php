<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topicSubmit extends Model
{
    use HasFactory;

    public function topic_data()
    {
       return $this->belongsTo('App\Models\writingTopc','topic_id','id');
    }
}
