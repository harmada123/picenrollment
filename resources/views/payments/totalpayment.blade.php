@extends('layouts.payroll')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Search Students
            </ol>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="users" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>Section</th>

                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3">
                        Total Remittance:
                        <label class="h-25"> {{$term}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection