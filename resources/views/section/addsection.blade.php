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
                            {!! Form::open() !!}
                            <div class="form-group">
                                {!! Form::label('section', 'Section Name : ') !!}
                                {!! Form::text('section',null,['class'=>'form-control', 'placeholder'=>'eg. Term 1 Section 1']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('location', 'Location : ') !!}
                                {!! Form::text('location',null,['class'=>'form-control', 'placeholder'=>'eg. Cavite']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('term', 'Tution Fee : ') !!}
                                {!! Form::select('term_id',array('Choose Options')+ $terms, null,['class'=>'form-control']) !!}
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