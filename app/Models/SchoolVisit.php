<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolVisit extends Model
{
    use HasFactory;

    protected $table = 'school_visit';

    protected $fillable = [
        'school_name',
        'total_student',
        'school_majority',
        'student_class',
        'total_teacher',
        'submision_date',
        'time_visit',
        'request_program',
        'contact_person',
        'letter_visit',
        'more_information',
        'slug'
    ];

}
