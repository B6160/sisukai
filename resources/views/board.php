<head>
    <link href="/css/style.css"rel="stylesheet" type="text/css">
    <link href="/css/box.css"rel="stylesheet" type="text/css">
    <title>掲示板</title>
</head>

<p>
    <div class="box1"><input type="button" value="戻る" onclick="history.back()"></div>
</p>

<div align="center"><p>掲示板</p></div>


<div  align="center">

<body>

<table class="type01">
    <?php foreach($task as $t){ ?>
        <tr>
            <td><?=$t->id?></td>
            <th scope="row" style="color: blue"><?=$t->name?></th>
            <td><?=$t->text?></td>
        </tr>
    <?php } ?>

</table>

<form action="/board" method="POST" >
    <?=  csrf_field()  ?>
    <table>
        <tr>
            <th>
                <span style="color: blue">name</span>
                <input type="text" name="name" >
            </th>
        </tr>
        <tr>
            <th>
                コメント
                <div>
                    <textarea name="text" rows="8" cols="40" wrap="hard">
                    </textarea>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <input type="submit" value=”送信” >
            </th>
        </tr>
    </table>
</form>
</div>
</body>
