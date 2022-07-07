<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

use App\Models\Students;
use App\Models\Profiles;
use App\Models\CoursesDets;
use App\Models\TopicsDets;

class StudentsController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */

    public function index() { 
      $studentsArray = Students::all();
      foreach ($studentsArray as $key => $value) {
        $value->profiles->pr_name;
      }

      return Inertia::render('TheStudents', [
        'listStudents' => $studentsArray
      ]);
    }

    public function subindex($id) {
      // get current student
      $dataStudent = Students::select('p_name','p_last_name','p_state')->where('id_person', $id)->first();
      $dataStudent = [ 'fullName' => $dataStudent->p_name.' '.$dataStudent->p_last_name,
                       'p_state' => $dataStudent->p_state ];
      // get courses by student
      $coursesArray = CoursesDets::from('tbl_det_per_courses AS dpc')
                      ->join('tbl_persons AS p','dpc.id_person','=','p.id_person')
                      ->join('tbl_courses AS c','dpc.id_course','=','c.id_course')
                      ->select('dpc.id_det_per_course','c.c_name','c.c_description','dpc.dpc_date_created','dpc.dpc_date_concluded')
                      ->where('p.id_person','=', $id)->get();

      $newCoursesData = [];
      foreach ($coursesArray as $key => $value) {
        // loop and get topics by course
        $newCoursesData[$key] = $coursesArray[$key];
        $currentArrayTopics = TopicsDets::from('tbl_det_per_topics AS dp')
                              ->join('tbl_topics AS t', 'dp.id_topic','=','t.id_topic')
                              ->select('dp.id_det_per_topic','dp.id_topic','t.t_name','dp.dp_attempts','dp.dp_calification')
                              ->where('dp.id_det_per_course','=', $value->id_det_per_course)->get();

        $newCoursesData[$key]['topics'] = $currentArrayTopics;
      }

      return Inertia::render('Components/StudentStatus', [
        'currentStudent' => $dataStudent,
        'currentCourses' => $newCoursesData
      ]);
    }
}
