<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Models\Student;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index(Request $req)
    {
        $search = $req->get('q');
        $data = Student::query()
            ->where('id','like', '%'.$search.'%')
            ->orWhere('name', 'like','%'.$search.'%')
            ->paginate();

        return view('student.index', [
            'data' => $data,
            'search' => $search,
        ]);
    }

    public function import(Request $req): RedirectResponse
    {
        if ($req->hasFile('user_file'))
        {
            try {
                Excel::import(new StudentsImport(), $req->file('user_file'));
            } catch (Exception $ex) {
                return back()->with('error', $ex->getPrevious()->getMessage());
            }
            return back()->with('success', 'Success!!!');
        }
        return back()->with('error', 'File not found!');
    }

    public function destroy(): RedirectResponse
    {
        DB::table('students')->truncate();
        return redirect()->route('index');
    }
}
