<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_name',
        'article_detail',
        'exam_id',                        
        'published_at'
    ];

    public function exams(){
        return $this->belongsTo('App\Exam');
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function answersdew(){
        return $this->hasMany('App\Answerdew');
    }
}
