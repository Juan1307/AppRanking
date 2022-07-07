<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
  use HasFactory;

  protected $primaryKey = 'id_profile';
  protected $table = 'tbl_profiles';
  
  public $timestamps = false;

  public function students() {
    return $this->hasMany(Students::class, 'id_person');
  }

}
