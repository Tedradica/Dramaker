<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team_Schedule extends Model
{
    //
    public $table = "team_schedules";
    public $timestamps = false;
    protected $primaryKey = ['schedule_no','team_no','sequence'];
    protected $fillable = ['user_no', 'name', 'prop'];
}
