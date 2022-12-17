<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public $incrementing = false;

    public function Filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function Elementmodule()
    {
        return $this->HasMany(Elementmodule::class);
    }
}
