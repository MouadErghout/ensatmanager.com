<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'code'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Note()
    {
        return $this->hasMany(Note::class,'eleve_code');
    }

    public function Moyenne()
    {
        return $this->hasOne(Moyenne::class,'eleve_code');
    }

    public function Filiere()
    {
        return $this->belongsTo(Filiere::class,'filiere_code');
    }

}
