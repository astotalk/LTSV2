<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitstore extends Model
{
    use HasFactory;
    protected $table = 'visitstore';
    protected $fillable =[
        'EngineerName',
        'OneSideKM',
        'Remark',
        'CustomerConformation',
    ];
}
