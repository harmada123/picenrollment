@extends('layouts.student')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Payment Summary
            </ol>
        </div>
    </div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">

                <div class="col-lg-2">
                    <label class="h4">1st Term </label> : {{$term1}}
                </div>
                <div class="col-lg-2">
                    <label class="h4">2nd Term </label> : {{$term2}}
                </div>
                <div class="col-lg-2">
                    <label class="h4">3rd Term </label> : {{$term3}}
                </div>
                <div class="col-lg-2">
                    <label class="h4">4th Term </label> : {{$term4}}
                </div>
                <div class="col-lg-2">
                    <label class="h4">5th Term </label> : {{$term5}}
                </div>
                <div class="col-lg-2">
                    <label class="h4">6th Term </label> : {{$term6}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection