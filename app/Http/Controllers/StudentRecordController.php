<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use App\Student;
use Illuminate\Http\Request;
use App\User;
use App\Photo;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
class StudentRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('course','course')->all();
        $sections = Section::pluck('section','id')->all();
        return view('student.addstudent',compact('courses','sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
            $input['password'] = bcrypt($request->lname . str_replace("-","", $request->birthday));
            $student = Student::create($input);
            $input['std_id'] = $student->id;
            User::create($input);

        }
        return redirect('/student');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewStudent(){

        return view('student.index');
    }
    public function get_datatable(){
        $students = Student::join('sections','students.section_id','sections.id')->select('students.id','students.name','students.lname','sections.section','students.course');
        return DataTables::of($students)->make(true);
    }
}
