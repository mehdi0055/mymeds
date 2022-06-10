<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = "demandes";
    protected $fillable = [
        'lname',
        'fname',
        'email',
        'phone',
        'cin',
        'code_doctor',
        'state',
        'city',
        'zipcode',
        'address',
        'name_cabinet',
        'phone_cabinet',
        'email_cabinet',
        'type_id',
        'address_cabinet',
        'status',
    ];
    public function type()
    {
        return $this->belongsTo(TypeCabinet::class, 'type_id');
    }
}
