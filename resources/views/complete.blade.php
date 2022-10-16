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






<div class="container">
    <h2>発行完了 </h2>
    <p style="text-align: left">URL</p>
    <p>

       {{-- <p>{{ $link->short }}</p> --}}


        {{-- <a href="{{ $link->url }}">{{ $link->short }}</a> --}}
        {{-- $short = {{ $link->short }}; --}}


    </p>
    {{-- <form action="/shorten" method="get"> --}}
    <label>
        <input type="url" name="url" value="http:://localhost/{{ $link->short }}" >
    </label>
        <div class="button"><button type="button" onClick="history.back()">戻る</button></div>

    {{-- </form> --}}
</div>


</body>
</html>
