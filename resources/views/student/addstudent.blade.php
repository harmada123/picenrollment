@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Students
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            {!! Form::open() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'First Name : ') !!}
                                {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'eg. Michael']) !!}
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
                                <div class='input-group date' id='datepicker'>
                                    {!! Form::label('birthday', 'Birthday : ') !!}
                                    {!! Form::date('birthday',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('course_id', 'Course : ') !!}
                                {!! Form::select('course_id',array('Choose Options'),NULL, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('section_id', 'Section : ') !!}
                                {!! Form::select('section_id',array('Choose Options'),NULL, array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <div class='input-group date' id='datepicker'>
                                    {!! Form::label('year_enrolled', 'Year Enrolled : ') !!}
                                    {!! Form::date('year_enrolled',null,['class'=>'form-control']) !!}
                                </div>
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