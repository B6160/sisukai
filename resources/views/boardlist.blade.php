@extends('layouts.app')

@section('content')
<html>


<header>
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <title>掲示板一覧</title>
</header>
    <body>
        <p>
            <div class="box1"><input type="button" value="戻る" onclick="history.back()"></div>
        </p>

<!--<div align="center"><p>掲示板一覧</p></div>-->

        <div  align="center">

            <p>掲示板一覧</p>

            <a href="/board"><input type="submit" value="kkkkkk"></a></br></br>

            <a href="/questionboard"><input type="submit" value="質問掲示板"></a></br></br>

            <a href="/board"><input type="submit" value="要望掲示板"></a></br></br>
        </div>
    </body>
</html>

@endsection