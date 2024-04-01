<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registeruser extends Model
{
    use HasFactory;

    protected $table = 'registerssusers';
    // public $timestamps=false;
    // protected $primarykey="id";
    protected $fillable =[
         'firstname',
         'lastname',
         'email',
         'password',
         'phone',
         'address',
    ];
}
