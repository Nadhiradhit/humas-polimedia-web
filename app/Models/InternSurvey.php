<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternSurvey extends Model
{
    //
    protected $table = 'survey_intern';
    protected $fillable = [
        'school_name',
        'intern_time',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7'
    ];
}
