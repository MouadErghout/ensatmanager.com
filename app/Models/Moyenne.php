<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moyenne extends Model
{
    public $incrementing = false;

    use HasFactory;

    public function Eleve()
    {
        return $this->belongsTo(Eleve::class,'eleve_code');
    }
}
