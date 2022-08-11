<html>
    <head>
        <title>User Registation Form </title>
    </head>
    <body>

        {{-- @php
        
            var_dump($errors->all());
        @endphp --}}

        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    
     <form method="POST" action="/artofcse/laravel-course/public/profile">
        @csrf

        Name: <input type="text" name="name"> </br>
        Email: <input type="text" name="email"> </br>
        Password: <input type="password" name="password"> </br>
                 <input type="submit" value="submit"> </br>
     </form>
    </body>
</html>