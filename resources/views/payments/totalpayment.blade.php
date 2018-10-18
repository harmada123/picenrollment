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
                        <th>Amount</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <label class="h2"> Total Remittance: {{$term}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 1:
                        <label class="h-25"> {{$term1}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 2:
                        <label class="h-25"> {{$term2}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 3:
                        <label class="h-25"> {{$term3}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 4:
                        <label class="h-25"> {{$term4}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 5:
                        <label class="h-25"> {{$term5}}</label>
                    </div>
                    <div class="col-lg-2">
                        Total Remittance in Term 6:
                        <label class="h-25"> {{$term6}}</label>
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
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/picenrollment/public/getsections/'+{{$id}}+ '/datatable',
                columns : [
                    {data: 'student_number', name: 'students.student_number'},
                    {data: 'name', name:'students.name'},
                    {data: 'lname', name:'students.lname'},
                    {data: 'amount', name:'payments.amount',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'getpayments/'+ row.id +'">' + data + '</a>';
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