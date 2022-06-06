<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = "demandes";

    public function type()
    {
        return $this->belongsTo(TypeCabinet::class, 'type_id');
    }
}
