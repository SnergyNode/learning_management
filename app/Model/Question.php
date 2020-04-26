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

    public function randomAnswers(){
        $answers = Answer::where('question_key', $this->unid)->inRandomOrder()->get();
        return $answers;
    }

    public function req(){
        return $this->ans_input==='radio'?'required':'';
    }
}
