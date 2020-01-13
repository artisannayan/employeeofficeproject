<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

   protected $table = 'memberships';

   protected $fillable = [
        'emp_id',
        'details',
   ];

   public function PersonalDetails()
   {
       return $this->belongsTo(PersonalDetails::class, 'eid');
   }

}
