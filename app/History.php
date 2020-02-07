<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'score_1',
        'score_2',
        'total_score',
        'user_id',
        'exam_id',                
        'published_at'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function exams(){
        return $this->hasOne('App\Exam');
    }
}
