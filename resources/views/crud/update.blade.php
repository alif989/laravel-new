<form  ID="crud_id" method="post" action="{{url('update')}}">
    @csrf
    @include('crud.user_form')
</form>