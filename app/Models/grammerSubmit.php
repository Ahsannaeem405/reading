<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grammerSubmit extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->hasMany('App\Models\grammerSubmitDetail','grammer_submit_id','id');
    }
}
