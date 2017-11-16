<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest_Apply extends Model
{
  public $table = "contest_applys";
  protected $primaryKey = 'apply_no';
  protected $fillable = ['contest_no', 'user_no', 'title', 'content', 'date', 'like', 'apply_status'];
}
