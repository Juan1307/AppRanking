<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesDets extends Model
{
    use HasFactory;

    protected $table = 'tbl_det_per_courses';
    protected $primaryKey = 'id_det_per_course';

    protected $casts = [
      'dpc_date_created' => 'datetime:d/m/Y H:i',
      'dpc_date_concluded' => 'datetime:d/m/Y H:i'
    ];
}
