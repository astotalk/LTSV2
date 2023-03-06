<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Addbrand extends Model
{
    use HasFactory;
    protected $table = 'addbrand';
 
    protected $fillable =[
        'id', 
        'client_name',
        'brand_name',
        'category_name',
        
    ];
}
