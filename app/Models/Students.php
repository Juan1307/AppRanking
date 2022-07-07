<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
  
  use HasFactory;
  
  protected $primaryKey = 'id_person';
  protected $table = 'tbl_persons';

  public $timestamps = false;

  public function profiles() {
    return $this->belongsTo(Profiles::class, 'id_profile');
  } 
}
