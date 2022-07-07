<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

use App\Models\Courses;
use App\Models\Topics;

class CoursesController extends Controller
{
    public function index() {
      $coursesArray = Courses::all();

      foreach ($coursesArray as $key => $value) {
        $value->topics;
      }

      return Inertia::render('TheCourses', [
        'currentCourses' => $coursesArray 
      ]);
    }
}
