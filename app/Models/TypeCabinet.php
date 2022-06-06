<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCabinet extends Model
{
    use HasFactory;
    protected $table ="type_cabinets";
<<<<<<< HEAD

    public function demande()
    {
        return $this->hasOne(Demande::class);
    }
=======
    protected $fillable = ['name','slug'];
>>>>>>> 68568974a63a528e78e4420caabb24d0c493a71e
}
