<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empolyee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable =[
        'name',
        'emp_code',
        'email',
        'phone',
        'alernate_number',
        'father_name',
        'father_mobile',
        'father_occupation',
        'desigantion',
        'gender', 
        'current_address',
        'country',
        'region',
        'city',
        'permanent_address',
        'country_id',
        'region_id',
        'city_id',
        'pin_code',
        'joining_date',
        'department',
        'status',
        'bank_name',
        'beneficiary_name',
        'account_number',
        'branch_name',
        'ifsc_code',



    ];
}
