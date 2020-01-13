<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'emp_id',
        'country_work',
        'best_work',
        'position',
        'project_name',
        'responcibility',
        'from',
        'to',
    ];
    public function PersonalDetails(){
        return $this->belongsTo(PersonalDetails::class, 'eid');
    }
}
