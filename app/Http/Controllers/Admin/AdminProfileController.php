<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProfileController extends Controller
{
    public function getProfile()
    {
        $user = auth()->user();
        return view("students_profile")->with(compact('user'));
    }
}
