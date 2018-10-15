@extends('layouts.portal')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Manage Grades
            </ol>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['method'=>'POST','action'=>'ManagePortalController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('subject', 'Subject : ') !!}
                                {!! Form::select('subject',array('Choose Options'),null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('grades', 'Grades : ') !!}
                                {!! Form::number('grades',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::hidden('user_id',$id,['value'=>$id]); !!}
                                {!! Form::hidden('section_id',$section,['value'=>$section]); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Enter Grades',['class'=>'btn btn-primary']) !!}
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
                                <th>Subject</th>
                                <th>Grade</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#terms').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/picenrollment/public/getgrades/' + {{$id}} +'/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'subject',},
                    {data: 'grade'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection