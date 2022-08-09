@extends('layout.app')

@section('header','This is Post page')
    <body>
        {{ ($post[1]->desc)}};
       
    </body>


</html>