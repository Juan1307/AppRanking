<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_course';
    protected $table = 'tbl_courses';
  
    public $timestamps = false;
  
    public function topics() {
      return $this->hasMany(Topics::class, 'id_course');
    } 
  
}
