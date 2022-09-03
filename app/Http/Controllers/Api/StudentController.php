<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function Index()
    {
        $students = Student::latest()->get();
        return response()->json($students);
    }
    public function Store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|unique:students|max:25',
            'email' => 'required|unique:students|max:25',
        ]);

        Student::insert([
            'class_id' => $request->class_id,
            'session_id' => $request->session_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $request->photo,
            'gender' => $request->gender,
            'created_at' => Carbon::now(),
        ]);
        return response('Student  inserted successfully');
    }
    public function Edit($id)
    {
        $students = Student::findOrFail($id);
        return response()->json($students);
    }
    public function Update(Request $request, $id)
    {
        Student::findOrFail($id)->update([
            'name' => $request->name,
        ]);
        return response('Student details updated');

    }
    public function Delete($id)
    {
        Student::findOrFail($id)->delete();
        return response('Student deleted successfully');
    }
}
