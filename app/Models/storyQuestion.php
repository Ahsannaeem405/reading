<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storyQuestion extends Model
{
    use HasFactory;

    public function detail()

    {
        return $this->hasMany('App\Models\storyQuestionDetail','question_id','id');
    }
}
