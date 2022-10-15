<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>短縮URL</title>
</head>

<body>

<div class="container">
    <h1>ログイン</h1>
    @if ($errors->any())
    <div class="log_error">
        <p>ログインに失敗しました</p>
    </div>

    @endif

<form action="login" method="post">
    @csrf

<div class="mail">

        <input type="email" style="width: 100%;"  placeholder="メールアドレス" name="email" value="{{ old('email') }}" >

</div>

<div class="pass">
        <input type="password" style="width: 100%;"  placeholder="パスワード" name="password" >
</div>

<div class="login_btn">
    <button type="submit">ログイン</button>
</div>


</form>

</div>


</body>
</html>
