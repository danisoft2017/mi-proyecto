<?php

namespace App\Models;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
}
