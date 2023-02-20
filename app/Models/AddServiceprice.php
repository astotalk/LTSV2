<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AddServiceprice extends Model
{
    use HasFactory;
    protected $table = 'addservicenterprice';
    protected $fillable =[
        'id', 
        'service_center_name',
        'product_type',
        'CallCharge',
        'FreeKM',
        'AmountAfterFreeKM',
        
    ];
}
