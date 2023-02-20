<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;
    protected $table = 'addproduct';
    protected $fillable =[
        'id', 
        'product_type',
        'status',
        
    ];
    
}