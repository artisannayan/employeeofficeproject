<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Departments extends Model
{
    protected  $fillable =[
          'name',
    ];
    public function employeelevel()
    {
        return $this->hasMany(EmpolyeeLevel::class);
    }
}
