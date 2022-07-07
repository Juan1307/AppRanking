<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_topic';
    protected $table = 'tbl_topics';
  
    public $timestamps = false;
  
    public function courses() {
      return $this->hasMany(Courses::class, 'id_course');
    } 
  
}
