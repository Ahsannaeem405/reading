<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrammerReportDetail extends Model
{
    use HasFactory;

    public function quest_category()
    {
        return  $this->belongsTo('App\Models\QuestCategory','catg_id','id');

    }
}
