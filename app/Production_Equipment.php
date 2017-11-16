<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production_Equipment extends Model
{
  public $table = "production_equipments";
  public $timestamps = false;
  protected $primaryKey = 'equipment_no';
  protected $fillable = ['production_no', 'equipment_name', 'category_no', 'sequence', 'equipment_status'];


}
