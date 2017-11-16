<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $primaryKey = 'schedule_no';
    protected $fillable = ['drama_no', 'local', 'date', 'number', 'created_at', 'updated_at'];
}
