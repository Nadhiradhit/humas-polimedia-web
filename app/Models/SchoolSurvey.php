<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSurvey extends Model
{
    protected $table = 'survey_school';
    protected $fillable = [
        'school_name',
        'date_visit',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7'
    ];
}
