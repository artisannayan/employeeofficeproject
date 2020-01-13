<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'emp_id',
        'ExamName',
        'board',
        'passing_year',
        'group',
        'CGPA',
    ];
    public function PersonalDetails(){
        return $this->belongsTo(PersonalDetails::class, 'eid');
    }
}
