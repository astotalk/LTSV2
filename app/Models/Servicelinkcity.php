<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicelinkcity extends Model
{
    use HasFactory;
    protected $table = 'servicecity_link';
    protected $fillable =[
         'service_center_name',
         'pin_code',
         'block',
         'district',
         'state',     
    ];
}
