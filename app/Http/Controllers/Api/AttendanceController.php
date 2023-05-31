<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courses;

class AttendanceController extends Controller
{
   public function courses(){
    $courses = Courses::get();
    return response([
        'courses' => $courses
    ],200);
   }
   public function apprentices($id){
    $apprentices = Course::with('apprentices')->where('id',$id)->get();
    return response([
        'apprentices' => $apprentices
    ],200);
   }
}
