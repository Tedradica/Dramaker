<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character_script extends Model
{
  public $timestamps = false;
  protected $primaryKey = ['script_no', 'scene_no'];

  protected $fillable = [
      'sequence', 'character', 'user_no', 'name', 'script', 'product',
  ];

}
