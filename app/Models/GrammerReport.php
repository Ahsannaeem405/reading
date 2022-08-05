<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrammerReport extends Model
{
    use HasFactory;

    public function report_question()
    {
      return  $this->hasMany('App\Models\GrammerReportDetail','grammer_report_id','id');
    }

    public function user()
    {
        return  $this->belongsTo('App\Models\User','user_id','id');
    }
}
