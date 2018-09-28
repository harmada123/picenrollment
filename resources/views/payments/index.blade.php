@extends('layouts.payroll')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Search Students
            </ol>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
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
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="terms" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course</th>
                                <th>Degree</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#terms').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/picenrollment/public/getpayments/{id}/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'course',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'users/'+ row.id + '/edit'+'">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {data: 'degree'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection