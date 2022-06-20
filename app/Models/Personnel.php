<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $table = "personnels";
    protected $fillable = ['lname', 'fname', 'gender', 'date_birth', 'cin', 'phone_personel', 'email_personel', 'state', 'city', 'zipcode', 'address', 'profession', 'date_embauche', 'salaire', 'has_account','active','delete'];
}
