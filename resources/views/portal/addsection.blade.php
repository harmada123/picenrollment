@extends('layouts.portal')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        Manage Subject
                    </ol>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['method'=>'POST','action'=>'ManageSectionController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('subject_name', 'Subject Name : ') !!}
                                {!! Form::text('section',null,['class'=>'form-control', 'placeholder'=>'eg. Introduction to Biochemistry']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('subject_code', 'Subject Code: ') !!}
                                {!! Form::text('location',null,['class'=>'form-control', 'placeholder'=>'eg. BIO220']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('course_avail', 'Course : ') !!}
                                {!! Form::select('course_avail',array('Choose Options')+ $course, null,['class'=>'form-control']) !!}
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
