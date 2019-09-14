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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover dataTables-example dataTable no-footer">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product_name</th>
                                        <th>Product Quantity</th>
                                        <th>Product Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $sl =1;
                                    @endphp
                                    @foreach($list as $value)
                                        <tr class="row-select-toggle">
                                            <td>{{ $sl++}}</td>
                                            <td>{{$value->product_name}}</td>
                                            <td>{{$value->product_quantity}}</td>
                                            <td>{{$value->product_price}}</td>
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


<script>
    $(document).ready(function () {
        $('#mytable').DataTable({
            responsive: true
        });
    });
</script>
@endsection