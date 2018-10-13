@extends('layouts.payroll')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Update Information
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::model($students,['action'=>['StudentRecordController@update',$students],'method'=>'PATCH','files' => true]) !!}
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
                        {!! Form::label('photo_id','Picture:') !!}
                        {!! Form::file('photo_id',['class'=>'btn']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Information',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
            <div class="mx-auto">
                <img class="img-thumbnail" src='{{url('images',$students->photo ? $students->photo->file : 'No Photo' )}}' style="height: 250px;width: 250px;"  />
            </div>
        </div>
    </div>
@endsection