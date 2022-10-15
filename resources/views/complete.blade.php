<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>
<body>

{{-- ログイン中のユーザー: <span>{{ $user->email }}</span> --}}




<div class="container">
    <h2>発行完了 </h2>
    <p style="text-align: left">URL</p>
    <p>
        @foreach ($links as $link)
        <p>{{ $link->short }}</p>
        @endforeach
        {{-- <a href="{{ $link->url }}">{{ $link->short }}</a> --}}
        {{-- $short = {{ $link->short }}; --}}


    </p>
    {{-- <form action="/shorten" method="get"> --}}
    <label>
        <input type="url" name="url" value="" >
    </label>
        <div class="button"><button type="submit">戻る</button></div>

    {{-- </form> --}}
</div>
test

</body>
</html>
