<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestSurvey extends Model
{
    //
    protected $table = 'survey_guest';

    protected $fillable = [
        'guest_name',
        'information_purpose',
        'other_information_purpose',
        'clarity_info',
        'service_quality',
        'service_duration',
    ];

}
