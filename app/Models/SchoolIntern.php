<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolIntern extends Model
{
    use HasFactory;

    protected $table = 'intern_application';

    protected $fillable =[
        'name_school',
        'total_student',
        'name_student',
        'majority_school',
        'student_class',
        'accompaying_teacher',
        'submision_date',
        'contact_person',
        'slug',
        'letter_intership'
    ];
}
