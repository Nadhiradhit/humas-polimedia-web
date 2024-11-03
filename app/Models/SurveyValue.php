<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyValue extends Model
{
    public $surveyValue = [
        'Sangat Tidak Setuju',
        'Tidak Setuju',
        'Netra/Ragu-Ragu',
        'Setuju',
        'Sangat Setuju'
    ];
}
