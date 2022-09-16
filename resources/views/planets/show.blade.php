<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>名前:{{ $planet->name }}</h1>
    <h1>名前(英語):{{ $planet->englishname }}</h1>
    <h1>半径:{{ $planet->radius }}</h1>
    <h1>重量:{{ $planet->weght }}</h1>

    <a href="/planets">戻る</a>
</body>

</html>
