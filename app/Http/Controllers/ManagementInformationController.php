<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Section;
use Yajra\DataTables\DataTables;

class ManagementInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $user = User::findOrFail($id);

        if(trim($request->password)==''){
            $input = $request->except('password');
        }
        else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }
        $user->update($input);
        return redirect('/management');

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

    public function settings($id){

        $users = User::find($id);
        return view('mis.settings',compact('users'));

    }
    public function userSettings($id){
        $users = User::find($id);
        return view('student.settings',compact('users'));

    }
    public function userInfo($id){
        $students = Student::find($id);
        return view('student.usersinfo',compact('students'));
    }
    public function updateInfo($id){
        $students = Student::find($id);
        return view('mis.usersinfo',compact('students'));
    }

    public function inactiveUsers(){
        return DataTables::of(Student::query()->where('course',null))->make(true);
    }
    public function viewInactive(){
        return view('student.inactive');
    }

    public function updateCourse($id){
        $students = Student::find($id);
        $courses = Course::pluck('course','course')->all();
        $sections = Section::pluck('section','id')->all();
        return view('student.updateinfo')->with(compact('students','courses','sections'));
    }

}
