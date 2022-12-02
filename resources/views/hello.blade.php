<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello there</title>
</head>
<body>
    <h1>Reflesh on Laravel</h1>
    @if($array)
    @foreach ($array as $item)
       <p> {{$item}}</p>
    @endforeach
    @endif
    <p>hello</p>
    @for ($i = 0; $i < 3; $i++)
        <p>the vaule of i is {{$i}} </p>
    @endfor
</body>
</html>