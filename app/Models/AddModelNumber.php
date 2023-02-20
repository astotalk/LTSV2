<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stockentry;

class AddModelNumber extends Model
{
    use HasFactory;
    protected $table = 'addmodelno';
    protected $fillable =[
        'id', 
        'client_name',
        'brand_name',
        'product_type',
        'model_no',
        
    ];

    public function  Stockentry(){
        return $this->hasMany(Stockentry::class, 'add_model_id', 'id');
    }
}
