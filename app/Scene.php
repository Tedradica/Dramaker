<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
  protected $primaryKey = 'script_no';

  protected $fillable = [
      'script_no', 'scene_no', 'date', 'location', 'scene_summary', 'status', 'created_at', 'updated_at'
  ];


}
