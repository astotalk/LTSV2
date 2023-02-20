<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'expense';
    protected $fillable =[
        'expesce_date',
        'PaidCat',
        'amount',
        'paid_through',
        'enter_mobile',
        'transaction',
        'paid_by',
        'remark',
    ];
    public function setCatAttribute($value)
    {
        $this->attributes['PaidCat'] = json_encode($value);
    }
  
    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['PaidCat'] = json_decode($value);
    }
}
