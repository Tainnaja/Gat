<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answerdew extends Model
{
    protected $fillable = [
        // 'answer_id',
        'text1-1',
        'text1-2',
        'text1-3',
        'text1-4',
        'text1-5',
        'text1-6',
        'text1-7',
        'text1-8',
        'text1-9',
        'text1-10',
        'set1-1-1',
        'set1-1-2',
        'set1-1-3',
        'set1-1-4',
        'set1-2-1',
        'set1-2-2',
        'set1-2-3',
        'set1-2-4',
        'set1-3-1',
        'set1-3-2',
        'set1-3-3',
        'set1-3-4',
        'set1-4-1',
        'set1-4-2',
        'set1-4-3',
        'set1-4-4',
        'set1-5-1',
        'set1-5-2',
        'set1-5-3',
        'set1-5-4',
        'set1-6-1',
        'set1-6-2',
        'set1-6-3',
        'set1-6-4',
        'set1-7-1',
        'set1-7-2',
        'set1-7-3',
        'set1-7-4',
        'set1-8-1',
        'set1-8-2',
        'set1-8-3',
        'set1-8-4',
        'set1-9-1',
        'set1-9-2',
        'set1-9-3',
        'set1-9-4',
        'set1-10-1',
        'set1-10-2',
        'set1-10-3',
        'set1-10-4',    
        'article_id',                        
        'published_at'
    ];
    public function articles(){
        return $this->belongsTo('App\Article');
    }
}
