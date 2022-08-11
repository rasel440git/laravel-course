@extends('layout.app')

@section('header','This is User page')
    
       
       
@section('content')
<h2>User Data</h2>
@foreach($user as $users)
{{$users->name}}.</br>
@endforeach
@stop  


</html>