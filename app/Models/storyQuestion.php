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

    public function catgname()

    {
        return $this->belongsTo('App\Models\QuestCategory','catg_quest_id','id');
    }
}
