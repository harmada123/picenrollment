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
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/picenrollment/public/getstudent/get_datatable',
                columns : [
                    {data: 'id', name: 'students.id'},
                    {data: 'name', name:'students.name'},
                    {data: 'lname', name:'students.lname'},
                    {data: 'course', name:'students.course'},
                    {data: 'section', name:'sections.section',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'users/'+ row.id + '/edit'+'">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection