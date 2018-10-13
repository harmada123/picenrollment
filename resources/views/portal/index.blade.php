@extends('layouts.portal')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Payments
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="terms" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Section</th>
                                <th>Location</th>
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
                ajax: '/picenrollment/public/grades/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'section',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'classroom/'+ row.id +'">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {data: 'location'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection