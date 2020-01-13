<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    protected $fillable = [
        'emp_id',
        'ComName',
        'refname',
        'position',
        'contact',
        'Details',
    ];
    public function PersonalDetails(){
        return $this->belongsTo(PersonalDetails::class, 'eid');
    }
}
