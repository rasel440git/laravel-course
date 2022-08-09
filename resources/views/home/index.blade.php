@extends('layout.app')

@section('header','This is User page')
    
       
       
@section('content')
<h2>User Data</h2>
{{ ($user[1]->email)}};
@stop  


</html>