<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //
    protected $fillable = [
        'unid',
        'title',
        'photo',
        'course_id',
        'mode',
        'duration',
        'active_from',
        'expire_at',
        'type',
        'ans_num_mode',
        'active',
    ];

    public function modeInfo(){
        return $this->mode;
    }

    public function attempts(){
        return 0;
    }

    public function questions(){
        return $this->hasMany(Question::class, 'assessment_key', 'unid');
    }
}
