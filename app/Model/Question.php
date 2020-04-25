<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [
        'unid',
        'assessment_key',
        'question',
        'photo',
        'ans_input',
    ];

    public function answers(){
        return $this->hasMany(Answer::class, 'question_key', 'unid');
    }
}
