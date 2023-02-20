<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable =[
        'company_name',
        'phone',
        'email',
        'incorporation_num',
        'gst',
        'pan_card',
        'dates',
        'pin_code',
        'register_address',
        'country', 
        'region',
        'city',
        'file_upload',
        'website',
        'desigantion',
        'name',
        'email_id',
        'phone_number',
        'bank_name',
        'beneficiary_name',
        'account_number',
        'branch_name',
        'ifsc_code',



    ];
}
