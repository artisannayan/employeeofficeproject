<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalDetails extends Model
{

    use SoftDeletes;

    protected $table = 'personal_details';

    protected $fillable = [
        'eid',
        'name',
        'position',
        'father_name',
        'mother_name',
        'brother',
        'sister',
        'LgName',
        'reading',
        'speaking',
        'writing',
        'dob',
        'religion',
        'blood_group',
        'NID',
        'persent_add',
        'permanent_add',
        'nationality',

    ];
    protected $dates =['deleted_at'];
    protected $softDelete = true;

    // public function Membership()
    // {
    // 	return $this->hasMany(Membership::class, 'emp_id');
    // }
    public function Membership()
    {
    	return $this->belongsTo(Membership::class, 'eid');
    }
    public function Education()
    {
    	return $this->belongsTo(Education::class, 'eid');
    }
    public function Training()
    {
    	return $this->belongsTo(Training::class, 'eid');
    }
    public function WorkExperience()
    {
    	return $this->belongsTo(WorkExperience::class, 'eid');
    }
    public function References()
    {
    	return $this->belongsTo(References::class, 'eid');
    }
    public function Phograph()
    {
    	return $this->belongsTo(Phograph::class, 'eid');
    }

}
