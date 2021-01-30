<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentProfileController extends Controller
{
    public function getId()
    {

        $user = auth()->user();
        return view("students_profile")->with(compact('user'));
    }
}
