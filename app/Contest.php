<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
  protected $primaryKey = 'contest_no';
  protected $fillable = ['production_no', 'title', 'reg_date', 'dead_date', 'content', 'view'];
}
