<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $fillable = [
        'round_number',
        'total_skill',
        'skill_A',
        'skill_D',
        'skill_F',
        'skill_99H',
        'user_id',
        'published_at'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
