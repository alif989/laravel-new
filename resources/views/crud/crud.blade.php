@extends('layouts.app')
@section('content')
    <div class="ibox-content">
        <form  ID="crud_id" method="post" action="{{url('store')}}">
            @csrf
            @include('crud.user_form')
        </form>
    </div>
@endsection