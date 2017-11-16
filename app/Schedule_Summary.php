<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_Summary extends Model
{
    //
    public $table = "schedule_summarys";
    public $timestamps = false;
    protected $primaryKey = ['schedule_no', 'sequence'];
    protected $fillable = ['scene_no', 'location', 'mden', 'sol', 'ie', 'scene_summary', 'etc', 'schedule_status'];
}
