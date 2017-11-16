<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    //
    protected $primaryKey = 'drama_no';
    protected $fillable = ['production_no', 'drama_name', 'reg_date', 'genre', 'story', 'drama_status'];

}
