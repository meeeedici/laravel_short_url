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
    <h2>短縮URL作成</h2>
    <p style="text-align: left">URL</p>
    <form action="/shorten" method="get">
    <label>
        <input type="url" name="url" placeholder="URLをこちらに入力" >
    </label>
        <div class="button"><button type="submit">短縮</button></div>

    </form>
</div>


</body>
</html>
