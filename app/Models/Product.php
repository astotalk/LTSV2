<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Addbrand;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable =[
        'product_model_name',
        'name',
        'product_type',
        'brand_name',
        'inventory',
        'price',
        'description',
        'gst',
        'hsn',
        'status',
        'upload_image',
    ];
    
}
