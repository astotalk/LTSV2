<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddServicenter;

class AddCallan extends Model
{
    use HasFactory;

    protected $table = 'deliverycallan';
    protected $fillable =[
        'challan_id', 
        'service_center_name',
        'part_name',
        'remark',
        'unitrate',
        'quantity',
        'gst',
        'value',
        'callan_date',
        
        
        
    ];
    public function addservicenter()
{
    return $this->belongsToMany(AddServicenter::class, 'addservicenter','id', 'delivery_challan_id');
}
}
