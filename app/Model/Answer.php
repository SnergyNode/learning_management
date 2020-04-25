<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'unid',
        'assessment_key',
        'question_key',
        'answer',
        'correct',
    ];
}
