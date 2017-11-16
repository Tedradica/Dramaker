<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continuity extends Model
{
  public $timestamps = false;
  protected $primaryKey = ['script_no', 'scene_no'];

  protected $fillable = [
      'sequence', 'original_name', 'save_name', 'type', 'path', 'content',
  ];

}
