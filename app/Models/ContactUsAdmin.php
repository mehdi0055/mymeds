<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsAdmin extends Model
{
    use HasFactory;

    protected $table = "contact_us_admins";
    protected $fillable = ['nameContact','emailContact','phoneContact','message'];
}
