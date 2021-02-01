<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentDeleteRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StudentAuthController extends Controller
{
    public function register()
    {
        return view('students_register');
    }

    public function store(StudentStoreRequest $request)
    {
        $role = 'student';
//        dd($request['email']);
        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'role' => $role,
            'password' => bcrypt($request['password']),
        ]);
        dd($user);
    }

    public function edit()
    {
        $user = auth()->user();
        return view("students_update")->with(compact('user'));
    }

    public function update(StudentUpdateRequest $request)
    {
//        $this->validate($request, [
//            'email' => 'required|email|unique:clients,email'
//        ]);
//        dd($request->all());


        User::where("id", auth()->user()->id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
        ]);
//        $user = User::find(auth()->user()->id);
//        $user = User::where("id",auth()->user()->id)->first();
//        $user = User::where("id",auth()->user()->id)->firstOrFail();

        return redirect("/home");
    }

    public function delete(StudentDeleteRequest $request)
    {
        User::where("id",$request->id)->delete();

        dd("delete done");
    }
}
