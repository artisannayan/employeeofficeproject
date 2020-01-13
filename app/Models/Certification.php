<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
     'name',
     'file',
    ];
    public function user(){
        return $this->belongsTo(UserEmployee::class);
    }
}
