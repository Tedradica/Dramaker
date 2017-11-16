<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Request_Product extends Model
{
  // public $incrementing = false;
  public $timestamps = false;
  public $table = "request_products";
  // protected $primaryKey = ['recruit_no','sequence'];
  protected $primaryKey = 'recruit_no';
  protected $fillable = ['drama_no','sequence', 'category_no', 'content'];
}
