<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante_Venta extends Model
{
    use HasFactory;
    protected $filliable =['nombre','estado'];
}
