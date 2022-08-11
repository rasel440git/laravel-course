<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello From Register Page</h1>
    <form method="POST" accept="/register">
        @csrf
        Name: <input type="text" name="name"> </br>    
        Email: <input type="text" name="email"></br>   
        Password: <input type="password" name="password">
        <input type="submit" value="SignUP">
    </form>
</body>
</html>