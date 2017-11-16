<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'script_no';

  protected $fillable = [
      'sequence', 'character', 'user_no', 'name', 'introduce',
  ];

}
