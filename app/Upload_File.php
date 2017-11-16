<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload_File extends Model
{
  public $table = "upload_files";
  public $timestamps = false;
  protected $primaryKey = 'file_no';
  protected $fillable = ['table_type','serial_no','use_type','sequence','original_name','save_name','date','path', 'type'];
}
