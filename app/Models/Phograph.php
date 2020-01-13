<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phograph extends Model
{
    protected $fillable = [
        'emp_id',
        'image',
        'signature',
    ];

    public function PersonalDetails()
    {
        return $this->belongsTo(PersonalDetails::class,'eid');
    }
}
