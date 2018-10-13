@extends('layouts.payroll')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        Add Students
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['action'=>'StudentRecordController@store','method'=>'POST','files'=>'true']) !!}
                            <div class="form-group">
                                {!! Form::label('student_number', 'Student Number : ') !!}
                                {!! Form::text('student_number',null,['class'=>'form-control', 'placeholder'=>'eg. ED446']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'First Name : ') !!}
                                {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'eg. Michael']) !!}
                                {!! Form::hidden('role','student',['value'=>'student']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('mname', 'Middle Name : ') !!}
                                {!! Form::text('mname',null,['class'=>'form-control', 'placeholder'=>'eg. Rivera']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('lname', 'Last Name : ') !!}
                                {!! Form::text('lname',null,['class'=>'form-control', 'placeholder'=>'eg. Lascanas']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Email:') !!}
                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <div class='input-group date' id='datepicker'>
                                    {!! Form::label('birthday', 'Birthday : ') !!}

                                    {!! Form::date('birthday',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('course', 'Course : ') !!}
                                {!! Form::select('course',array('Choose Options') + $courses ,NULL, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('section_id', 'Section : ') !!}
                                {!! Form::select('section_id',array('Choose Options')+ $sections ,NULL, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('gender', 'Gender : ') !!}
                                {!! Form::select('gender',array('Choose Options','Male'=>'Male','Female'=>'Female'),NULL, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Address : ') !!}
                                {!! Form::textarea('address',null,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <div class='input-group date' id='datepicker'>
                                    {!! Form::label('year_enrolled', 'Year Enrolled : ') !!}
                                    {!! Form::date('year_enrolled',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('photo_id','Picture:') !!}
                                {!! Form::file('photo_id',['class'=>'btn']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Create Students',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection