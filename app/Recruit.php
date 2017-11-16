<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{

  protected $primaryKey = 'recruit_no';
  protected $fillable = ['drama_no','production_no', 'user_no', 'title', 'created_at', 'local', 'dead_date', 'content'];
}
