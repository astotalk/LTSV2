<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddModelNumber;

class Stockentry extends Model
{
 
    use HasFactory;
    protected $table = 'stockentry';
    protected $fillable =[
        'id', 
        'client_name',
        'stock',
        'part_name',
        'quantity',
        'ReceivedDate',
        'ReceivedBy',
        'add_model_id',
       
    ];

    public function  AddModelNumber(){
        return $this->belongsTo(AddModelNumber::class);
    }
}
