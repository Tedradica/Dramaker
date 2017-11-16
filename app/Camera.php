<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
  public $timestamps = false;
  protected $primaryKey = ['script_no', 'scene_no'];

  protected $fillable = [
      'sequence', 'user_no', 'name', 'content',
  ];
}
