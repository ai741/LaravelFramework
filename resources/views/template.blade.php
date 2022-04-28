<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заданьеце</title>
</head>
<body>
    <h2>Мои пользователи | Отряд: {{ $detachment }} </h2>
    <ol>
        <li>{{ $user[0] }}</li>
        <li>{{ $user[1] }}</li>
        <li>{{ $user[2] }}</li>
    </ol>
</body>
</html>
