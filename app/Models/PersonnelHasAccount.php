<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelHasAccount extends Model
{
    use HasFactory;


    protected $table = "personnel_has_accounts";
    protected $fillable = ['personnel_id','user_id'];


}
