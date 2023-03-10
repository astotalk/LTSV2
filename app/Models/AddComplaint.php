<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AddComplaint extends Model
{
  
    use HasFactory;
    protected $table = 'addcomplaits';
    protected $fillable =[
        'complaint_id',
        'custom_name',
        'dates',
        'tat',
        'escalation',
        'custom_mobile',
        'other_mobile',
        'custom_address',
        'pin_code',
        'block',
        'district',
        'state',
        'type_complaint',
        'date',
        'brand_name',
        'type_model',
        'warrenty_number', 
        'product_type',
        'visit_type',
        'company_detail',
        'remark',
        'status',
       
    ];
    public function addservicenter(){

        return $this->hasMany(AddComplaint::class, 'eng_name','id');
    }

}
