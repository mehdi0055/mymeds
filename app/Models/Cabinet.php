<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;
    protected $table="cabinets";
    protected $fillable = ['name_cabinet','email_cabinet','phone_cabinet','address_cabinet','logo_cabinet','theme_cabinet','type_id','doctor_id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function typeCabinet()
    {
        return $this->belongsTo(TypeCabinet::class, 'type_id');
    }


}
