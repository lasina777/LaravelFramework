<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #1a202c">
<ul>
    @foreach($array as $item)
        <li style="font-size: 20px;font-family: Arial;color: white">
            {{$item}}
        </li>
    @endforeach
</ul>
</body>
</html>
