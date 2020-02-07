<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer_number',
        'answer_name',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'article_id',                        
        'published_at'
    ];

    public function articles(){
        return $this->belongsTo('App\Article');
    }
}
