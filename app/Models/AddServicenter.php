<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddCallan;
use App\Models\AddComplaint;


class AddServicenter extends Model
{
    use HasFactory;
    protected $table = 'addservicenter';
    protected $fillable =[
        'service_center_name',
        'eng_name',
        'phone',
        'other_number',
        'address',
        'pin_code',
        'block',
        'district',
        'state',
        'gst',
        'sf_approved_by',
        'user_name',
        'password',
        'remark',
       
    ];
    public function addcomplaits(){
        return $this->hasMany(AddComplaint::class, 'addcomplaits','id');
    }

    public function deliverycallan()
    {
        return $this->belongsToMany(AddCallan::class, 'deliverycallan','id', 'delivery_challan_id');
    }
}
