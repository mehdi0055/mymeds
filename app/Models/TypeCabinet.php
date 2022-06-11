<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCabinet extends Model
{
    use HasFactory;
    protected $table ="type_cabinets";



    public function demande()
    {
        return $this->hasMany(Demande::class);
    }

    public function cabinet()
    {
        return $this->hasMany(Cabinet::class);
    }

    protected $fillable = ['name','slug','status'];

}
