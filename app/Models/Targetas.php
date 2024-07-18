<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Targetas extends Model
{
    use HasFactory;


    protected $fillable = [
        'idTargeta',
        'nombre',
        'cedula',
        'saldo',
    ];
}
