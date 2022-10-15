<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>URL短縮</title>
</head>
<body>
<header>
    <h1>URL短縮サービス</h1>
</header>

<div class="main">
    <div class="to_create">
        <a href="{{ route('ad.create') }}">新規登録</a>

    </div>

    <div class="to_login">
        <a href="login">ログイン</a>

    </div>
</div>

</body>
</html>
