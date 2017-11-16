<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetting extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'no';
    protected $fillable = ['schedule_no', 'sequence', 'time', 'content','team_no'];

}
