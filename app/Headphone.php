<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headphone extends Model
{
  protected $fillable = [
      "marca",
      "modello",
      "peso",
      "caratteristiche",
      "descrizione",
      "prezzo"
  ];
}
