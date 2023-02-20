<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addpart extends Model
{
    use HasFactory;
    protected $table = 'addpart_link';
    protected $fillable =[
        'id', 
        'client_name',
        'product_type',
        'part_name',
        'part_code',
        'part_cost',
        'status',
    ];
}
