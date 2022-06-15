<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportStudent;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function importView(Request $request)
    {
        return view('importFile');
    }
    public function import(Request $request)
    {
        Excel::import(new ImportStudent, $request->file);
        return redirect()->route('search');
    }
    public function search(Request $request)
    {
        $id_DB = DB::table('student')->get('id_student');
        $id_student = $request->id;
        $fullname = $request->name;
        // dd($request->id);  
        if (isset($id_student)) {
            $students = DB::table('student')->where('id_student', 'like', '%' . str_replace(" ", '%', $id_student) . '%')->get();
        } else {
            $students = DB::table('student')->where('fullname', 'like', '%' . $fullname . '%')->get();
        }
        return view('search')->with([
            'students' => $students,
        ]);
    }
}
