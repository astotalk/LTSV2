<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistraionReport extends Model
{
    use HasFactory;
    protected $table = 'registrationreport';
    protected $fillable =[
         'Year',
         'Month',
         
    ];

}
