@extends('layouts.app')

@section('content')
    <meta charset="utf-8" />
    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">--}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <html>


    <header>
        <link href="/css/box.css"rel="stylesheet" type="text/css">
        <title>掲示板一覧</title>
    </header>
    <body>

    <div  align="center">

        <h1>掲示板一覧</h1>

        <a href="/questionboard"><h1><button class="btn btn-info btn-lg000" >質問掲示板</button></h1></a>

        <a href="/board"><h1><button class="btn btn-info btn-lg">要望掲示板</button></h1></a>

    </div>
    </body>
    </html>
@endsection