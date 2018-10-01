@extends('layouts.payroll')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <ol class="breadcrumb">
                Payments
            </ol>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['method'=>'POST','action'=>'ManagePaymentController@store']) !!}
                            <div class="form-group">
                                {!! Form::label('remittance_date', 'Remittance Date : ') !!}
                                {!! Form::date('remittance_date',null,['class'=>'form-control','required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('amount', 'Amount : ') !!}
                                {!! Form::number('amount',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('term', 'Term : ') !!}
                                {!! Form::select('term',array('1st'=>'1st','2nd'=>'2nd','3rd'=>'3rd','4th'=>'4th','5th'=>'5th','6th'=>'6th'),null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('OR_number', 'OR Number : ') !!}
                                {!! Form::text('OR_number',null,['class'=>'form-control']) !!}
                                {!! Form::hidden('user_id',$id,['value'=>$id]); !!}
                                {!! Form::hidden('section_id',$section_id,['value'=>$section_id]); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Create Payment',['class'=>'btn btn-primary']) !!}
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
                                <th>Remittance Date</th>
                                <th>Term</th>
                                <th>Amount</th>
                                <th>OR Number</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
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
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#terms').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/picenrollment/public/getpayments/'+{{$id}}+'/get_datatable',
                columns : [
                    {data: 'id'},
                    {data: 'remittance_date',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + 'users/'+ row.id + '/edit'+'">' + data + '</a>';
                            }
                            return data;
                        }
                    },
                    {data: 'term'},
                    {data: 'amount'},
                    {data: 'OR_number'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection