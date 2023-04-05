<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_gasto extends Model
{
    use HasFactory;
   // protected $table="categoria_gastos";
   protected $fillable=[
        'name',
        'user_id',
   ];
}
