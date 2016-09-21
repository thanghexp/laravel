<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Carbon\Carbon;

class Articles extends Model
{
    protected $fillable = [
        'author', 'title', 'content'
    ];

//    public function setCreatedAtAttribute($date) {
//        $this->arttributes['create_at'] = Carbon::createFromFormat('Y-m-d', $date);
//    }
    
}
