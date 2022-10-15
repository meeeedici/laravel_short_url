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
    <h1>新規登録</h1>

<form action="{{ route('ad.store') }}" method="post">
    @csrf
@if ($errors->any())
<div class="error">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>

    @endforeach
</ul>
</div>

@endif

<div class="mail">

        <input type="email" style="width: 100%;"  placeholder="メールアドレス" name="email" >

</div>

<div class="pass">
        <input type="password" style="width: 100%;"  placeholder="パスワード" name="password" >
</div>

<div class="login_btn">
    <button type="submit">登録</button>
</div>


</form>

</div>


</body>
</html>
