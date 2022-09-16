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
    <h1>惑星情報編集</h1>
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



    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('patch')
        <div class="form-item">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $planet->name) }}">
        </div>
        <div class="form-item">
            <label for="englishname">名前(英語)</label>
            <input type="text" name="englishname" id="englishname" value="{{ old('englishname', $planet->englishname) }}">
        </div>
        <div class="form-item">
            <label for="radius">半径</label>
            <input type="text" name="radius" id="radius" value="{{ old('radius', $planet->radius) }}">
        </div>
        <div class="form-item">
            <label for="weight">重量</label>
            <input type="text" name="weght" id="weght" value="{{ old('weght', $planet->weght) }}">
        </div>
        <input type="submit" value="更新">
    </form>
    <a href="/planets">戻る</a>




    {{-- <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        {{-- 名前 --}}
        {{-- <p>
            <label for="name">名前<label><br>
                    <input type="string" name="name" vaule="{{ old('name', $planet->name) }}">
        </p>
        {{-- 名前(英語) --}}
        {{-- <p>
            <label for="englishame">名前(英語)<label><br>
                    <input type="string" name="englishname" vaule="{{ old('englishname', $planet->englishname) }}"> --}}
        {{-- </p> --}}

        {{-- 半径 --}}
        {{-- <p> --}}
            {{-- <label for="radius">半径<label><br>
                    <input type="number" name="radius" vaule="{{ old('radius', $planet->radius) }}"> --}}
        {{-- </p> --}}
        {{-- 重量 --}}
        {{-- <p>
            <label for="weght">重量<label><br>
                    <input type="number" name="weght" vaule="{{ old('weght', $planet->weght) }}">
        </p>
        <p><input type="submit" value="更新"></p>
        
    </form>  --}}
    {{-- <a href="/planets/">戻る</a> --}}
</body>

</html>
