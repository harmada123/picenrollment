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
                <table id="terms" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Term</th>
                        <th>Term Date</th>
                        <th>Tuition</th>
                    </tr>
                    </thead>
                </table>
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
                ajax: '/picenrollment/public/getterm/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'term',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'terms/'+ row.id + '">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {data: 'termdate'},
                    {data: 'total'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection