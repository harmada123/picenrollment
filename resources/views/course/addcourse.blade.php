@extends('layouts.payroll')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        Manage Terms
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['method'=>'POST','action'=>'ManageCourseController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('course', 'Course Name : ') !!}
                                {!! Form::text('course',null,['class'=>'form-control', 'placeholder'=>'eg. Computer Science']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('degree', 'Degree : ') !!}
                                {!! Form::select('degree',array('Bachelors'=>'Bachelors','Masteral'=>'Masteral','Doctoral'=>'Doctoral'),null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Create Term',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection