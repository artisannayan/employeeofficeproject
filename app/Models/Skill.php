<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'user_id',
        // 'name',
        'Description',
    ];

    public function user(){
        return $this->belongsTo(UserEmployee::class);
    }
}
