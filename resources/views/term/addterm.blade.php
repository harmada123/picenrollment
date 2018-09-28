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
                            {!! Form::open(['method'=>'POST','action'=>'ManageTermController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('term', 'Term Name : ') !!}
                                {!! Form::text('term',null,['class'=>'form-control', 'placeholder'=>'eg. September 2018 - December 2018']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('termdate', 'Start Term : ') !!}
                                {!! Form::date('termdate',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('total', 'Tution Fee : ') !!}
                                {!! Form::number('total',null,['class'=>'form-control','step' => '0.1']) !!}
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