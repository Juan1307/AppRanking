<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicsDets extends Model
{
    use HasFactory;

    protected $table = 'tbl_det_per_topics';
    protected $primaryKey = 'id_det_per_topic';
}
