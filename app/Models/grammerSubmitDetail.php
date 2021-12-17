<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grammerSubmitDetail extends Model
{
    use HasFactory;

    public function grammer()
    {
        return $this->belongsTo('App\Models\writingGrammer','grammer_id','id');
    }
}
