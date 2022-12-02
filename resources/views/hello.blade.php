<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello there</title>
</head>
<body>
    <h1>Demo </h1>
    @if($price >93)
    <p>it too much sir</p>
    @elseif($price == 90)
    <p>hello there</p>
    @else
    <p>give one sir</p>
    @endif

    @unless(1 == 4 )
    <p>hello from unless</p>
    @endunless

    @php
    $name = "jame kamsonga";
    echo $name;
    @endphp

</body>
</html>