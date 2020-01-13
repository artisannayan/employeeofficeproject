<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'emp_id',
        'name',
        'deration',
        'organisation',
    ];

    public function PersonalDetails(){
        return $this->belongsTo(PersonalDetails::class);
    }
}
