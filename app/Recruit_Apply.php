<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit_Apply extends Model
{
  public $table = "recruit_applys";
  protected $primaryKey = 'apply_no';
  protected $fillable = ['recruit_no', 'user_no', 'name', 'birth', 'email',
                        'tel', 'career', 'type', 'stage_name', 'gender', 'height',
                        'weight', 'local', 'like', 'recruit_status'];

}
