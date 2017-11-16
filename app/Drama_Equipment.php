<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drama_Equipment extends Model
{
  public $table = "drama_equipments";
  protected $primaryKey = "no";
  protected $fillable = ['no', 'drama_no', 'production_no', 'equipment_no', 'rental_date','return_date','status'];
}
