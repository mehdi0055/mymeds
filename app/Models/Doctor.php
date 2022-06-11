<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;


    protected $table ="doctors";
    protected $fillable = ['lname','fname','gender','date_birth','cin','code_doctor','phone_personel','email_personel','state','city','zipcode','address','profession','user_id','role_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cabinet()
    {
        return $this->hasOne(Cabinet::class);
    }
}
