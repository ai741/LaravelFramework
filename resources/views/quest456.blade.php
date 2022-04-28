<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>4 задание</h2>
<ul>
    @foreach ($array as $item)
        <li>Перчик -  {{ $item }}</li>
    @endforeach
</ul>

<hr>
<h2>5 задание</h2>
@foreach ($array as $item)
    <div>Перчик -  {{ $item }}</div>
@endforeach
<hr>

<h2>6 задание</h2>
<span>Четные - </span>
@foreach ($numbers as $number)

    @if ($number % 2 == 0)
        <span> {{ $number }}</span>
    @endif

@endforeach
<hr>

</body>
</html>
