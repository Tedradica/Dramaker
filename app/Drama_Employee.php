<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drama_Employee extends Model
{
  public $table = "drama_employees";
  protected $primaryKey = 'drama_no';
  protected $fillable = ['drama_no', 'sequence', 'team_no', 'user_no', 'position_no','created_at'];
}
