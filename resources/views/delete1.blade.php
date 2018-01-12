<?php
/**
 * Created by PhpStorm.
 * User: b6246
 * Date: 2017/11/14
 * Time: 12:48
 */$sql = "SELECT * FROM threads order by created_at desc";
$result = mysql_query($sql);
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>トップ</title>
</head>
<body>
<p><a href="thread_new.php">スレッド作成</a></p>
<table>
    <?php while($thread = mysql_fetch_array($result)):?>
    <tr><td><a href="thread.php?id=<?php echo $thread['id'];?>"><?php echo $thread['title'];?></a></td><td><?php echo $thread['created_at'];?></td></tr>
    <?php endwhile;?>
</table>
</body>
</html>