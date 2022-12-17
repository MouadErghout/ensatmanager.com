<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementModule extends Model
{
    public $incrementing = false;

    use HasFactory;

    public function Module()
    {
        return $this->belongsTo(Module::class);
    }
}
