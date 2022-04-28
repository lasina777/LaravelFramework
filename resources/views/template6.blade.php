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
@foreach($array as $item)
    @if($item %2 == 0)
        <span style="font-size: 20px;font-family: Arial;color: white">
             - {{$item}}<br>
        </span>
    @endif
@endforeach
</body>
</html>
