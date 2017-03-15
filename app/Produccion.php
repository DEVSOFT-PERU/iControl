<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
  protected $fillable = [
      'id', 'titulo', 'descripcion', 'id_user',
  ];
}
