<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

use App\Models\TopicsDets;
use App\Models\Students;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
  public function index() {

    $studentsData = Students::all();
    $studentsCourses = DB::table('tbl_persons AS p')
                            ->join('tbl_det_per_courses AS dpc','p.id_person','=','dpc.id_person')
                            ->select('p.id_person','dpc.id_det_per_course','id_course')
                            ->get();
    
    $calificationsData = []; 
    foreach ($studentsCourses as $key => $value) {
      $currentCalification = TopicsDets::from('tbl_det_per_topics')
                              ->where('id_det_per_course','=', $value->id_det_per_course)
                              ->where('id_course','=', $value->id_course)
                              ->select('id_det_per_course','dp_calification','dp_attempts')
                              ->get();
      $calificationsData[$key] = $currentCalification;
    }

    return Inertia::render('TheRanking', [
      'currentStudents' => $studentsData,
      'currentCourses' => $studentsCourses,
      'currentCalifications' => $calificationsData 
    ]);
  }
}




