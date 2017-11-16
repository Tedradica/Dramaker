<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit_Field extends Model
{
    public $table = 'recruit_fields';
    public $timestamps = false;
    protected $primaryKey = 'recruit_no';
    protected $fillable = ['recruit_no', 'sequence', 'recruit_position', 'volume'];
}
