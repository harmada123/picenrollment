<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
class ManagePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Payment::create($input);
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
    public function getPayments($id){

        $section_id = Student::find($id)->section_id;

        $term1 = DB::table('payments')->where(['user_id'=>$id,'term'=>'1st'])->sum('amount');
        $term2 = DB::table('payments')->where(['user_id'=>$id,'term'=>'2nd'])->sum('amount');
        $term3 = DB::table('payments')->where(['user_id'=>$id,'term'=>'3rd'])->sum('amount');
        $term4 = DB::table('payments')->where(['user_id'=>$id,'term'=>'4th'])->sum('amount');
        $term5 = DB::table('payments')->where(['user_id'=>$id,'term'=>'5th'])->sum('amount');
        $term6 = DB::table('payments')->where(['user_id'=>$id,'term'=>'6th'])->sum('amount');
        return view('payments.index')->with(compact('id','term1','term2','term3','term4','term5','term6','section_id'));
    }
    public function get_datatable($id){
        return DataTables::of(Payment::query()->where('user_id',$id))->make(true);
    }
    public function totalPayment($id){

        $term = DB::table('payments')->where('section_id',$id)->sum('amount');
        $term1 = DB::table('payments')->where(['section_id'=>$id,'term'=>'1st'])->sum('amount');
        $term2 = DB::table('payments')->where(['section_id'=>$id,'term'=>'2nd'])->sum('amount');
        $term3 = DB::table('payments')->where(['section_id'=>$id,'term'=>'3rd'])->sum('amount');
        $term4 = DB::table('payments')->where(['section_id'=>$id,'term'=>'4th'])->sum('amount');
        $term5 = DB::table('payments')->where(['section_id'=>$id,'term'=>'5th'])->sum('amount');
        $term6 = DB::table('payments')->where(['section_id'=>$id,'term'=>'6th'])->sum('amount');


        return view('payments.totalpayment')->with(compact('term','id','term1','term2','term3','term4','term5','term6'));
    }
    public function datatable($id){
        return DataTables::of(Payment::join('students','payments.user_id','students.id')
            ->select('students.id','students.name','students.lname','payments.amount')
            ->where('students.section_id',$id))->make(true);
    }

}
