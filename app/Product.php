<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'product_no';
  protected $fillable = ['company_no', 'product_name', 'category_no', 'introduce'];
}
