<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientList extends Model
{
    use HasFactory;
    protected $table = 'clientlist';
    protected $fillable =[
        'client_name',
        'client_phone',
        'client_address',
        'pin_code',
        'country',
        'region',
        'city',
        'gst',
        'pan_card',
        'concerned_name',
        'concerned_person_phone',
        'sms',
        'othercrmid',     
    ];
}
