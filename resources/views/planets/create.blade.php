<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/planets" method="post">
        @csrf
        {{-- 名前 --}}
        <p>
            <label for="name">名前<label>
                    <input type="string" name="name" vaule="{{ old('name') }}">
        </p>
        {{-- 名前(英語) --}}
        <p>
            <label for="englishame">名前(英語)<label>
                    <input type="string" name="englishname" vaule="{{ old('englishname') }}">
        </p>

        {{-- 半径 --}}
        <p>
            <label for="radius">半径<label>
                    <input type="number" name="radius" vaule="{{ old('radius') }}">
        </p>
        {{-- 重量 --}}
        <p>
            <label for="weght">重量<label>
                    <input type="number" name="weght" vaule="{{ old('weght') }}">
        </p>
        <p><input type="submit" value="新規登録"></p>
        <a href="/planets">戻る</a>
    </form>
</body>

</html>
