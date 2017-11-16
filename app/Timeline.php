<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //
    public $table = "timelines";
    protected $primaryKey = 'notice_no';
    protected $fillable = ['sender','receiver','time','created_at','updated_at','url','use_type','notice_type','table_type','serial_no','notice','notice_status'];
}
