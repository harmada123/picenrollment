@extends('layouts.student')
@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="terms" class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Grade</th>
                        </tr>
                        </thead>
                    </table>
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
                ajax: '/picenrollment/public/get_grades/get_datatable',
                columns : [
                    {data: 'subject',},
                    {data: 'grade'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection