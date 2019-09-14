@extends('layouts.app')
@section('content')
    <style>
        .selected{
            background-color: #1bff98 !important;
        }
    </style>
    <div class="wrapper wrapper-content animated fadeInRight">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="ibox">
                    <br>
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <button class="btn btn-success btn-xs" id="item_view"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                            <button class="btn btn-warning btn-xs" id="item_edit"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                            <button class="btn btn-danger btn-xs" id="item_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </div>
                    </div>{{ csrf_token() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover dataTables-example dataTable no-footer">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>user_name</th>
                                        <th>user_id</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $sl =1;
                                    @endphp
                                    @foreach($list as $value)
                                        <tr class="row-select-toggle" data-userid="{{$value->USER_ID}}">
                                            <td  >{{ $sl++}}</td>
                                            <td>{{$value->NAME}}</td>
                                            <td>{{$value->USER_ID}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--edit modal--}}
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('#mytable').DataTable( {
                responsive: true
            });
            $('#item_view').hide();
            $('#item_edit').hide();
            $('#item_delete').hide();

        });
        var bucket = [];
        $('#mytable tbody').on('click', '.row-select-toggle', function () {
            var self = $(this);
            var id = $(this).data('userid');
            if ($(this).toggleClass('selected')) {
                if ($(this).hasClass('selected')) {
                    bucket.push(id);
                } else {
                    bucket.splice(bucket.indexOf(id), 1);
                }
                var arr_length = bucket.length;
                if (arr_length > 1) {
                    $('#item_edit').show();
                    $('#item_view').hide();
                    $('#item_delete').show();
                }
                else if (arr_length == 1) {
                    $('#item_edit').show();
                    $('#item_view').show();
                    $('#item_delete').show();
                }
                else{
                    $('#item_view').hide();
                    $('#item_edit').hide();
                    $('#item_delete').hide();
                }
            }

         //


        });

        $("#item_edit").on('click' ,function (e) {
            var arr_length = bucket.length;

            if(arr_length == 1){
             //   console.log(bucket[0]);
                $.ajax({
                    url:"{{ url('edit') }}",
                    method: "POST",
                    data:{id:bucket[0],"_token": "{{ csrf_token() }}"},
                    success:function(data){
                        $('.modal-body').html(data);
                        $("#myModal").modal('show');
                    }

                });

            }else{
                alert('please select one row')
            }

        });
        $("#item_delete").on('click' ,function (e) {
           // var arr_length = bucket.length;


               console.log(bucket);
                $.ajax({
                    url:"{{ url('delete') }}",
                    method: "POST",
                    data:{id:bucket,"_token": "{{ csrf_token() }}"},
                    success:function(data){
                        alert('delete successful');
                        location.reload();
                    }

                });

        });


    </script>

@endsection

