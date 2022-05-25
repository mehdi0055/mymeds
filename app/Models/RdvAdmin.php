<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RdvAdmin extends Model
{
    use HasFactory;

    protected $table = "rdv_admins";
    protected $fillable = ['name','email','phone','status','time','date'];

}
