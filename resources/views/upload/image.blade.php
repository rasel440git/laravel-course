<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Upload</title>
</head>
<body>
    <h1>Hello!!! Welcome From Image Upload Page</h1>
    <form action="file-upload" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>