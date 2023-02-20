<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leaves';
    protected $fillable =[
         'department',
         'name',
         'select_type',
         'fromdate',
         'todate',
         'reason',
         'leave_status',
    ];
}
