<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Haiii</h1>
    @foreach($page-> node as $link) 

   {{$link->[1]}}

    @endforeach
</body>
</html>