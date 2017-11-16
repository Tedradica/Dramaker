<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'user_no';

  protected $fillable = [
      'sequence', 'content',
  ];

}
