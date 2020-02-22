<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'exam_name',                        
        'published_at',
        'emphasize'
    ];

    public function historys(){
        return $this->belongsToMany('App\History');
    }

    public function articles(){
        return $this->hasMany('App\Article');
    }
}
