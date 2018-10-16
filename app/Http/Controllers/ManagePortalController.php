<?php

namespace App\Http\Controllers;

use App\Course;
use App\Session;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Section;
class ManagePortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Session::create($input);
        return redirect('/classroom/getstudents/'. $input['std_id']);
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
    public function get_datatable(){
        return DataTables::of(Section::query())->make(true);
    }
    public function getClass($id){
        return view('portal.class',compact('id'));
    }
    public function datatable($id){
        return DataTables::of(Student::query()->where('section_id',$id))->make(true);
    }
    public function get_grades($id){
        return DataTables::of(Session::query()->where('std_id',$id))->make(true);
    }

    public function getStudents($id){
        $student = Student::find($id);
        $course = $student->course;
        $section  = $student->section_id;
        $subject = Subject::pluck('subject_name','subject_code')->all();
        return view('portal.grades')->with(compact('id','section','subject','course'));
    }

    public function makeSubject(){
        $course = Course::pluck('course','course')->all();
        return view('portal.addsection',compact('course'));
    }
}
