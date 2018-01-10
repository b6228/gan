<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品一覧</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzG9L4RcaiAUA7sSDPpZcAmzNTMB-lq71AZJqLcyu1vJN5wrr9qw">
<Div Align="center"><div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;"><h1>ガンショップ</h1></Div>
</Div>
<div align="right"><div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 50px;"><span style="background-color:#ffffff"><a href="/cart">カート </a></div>
    </span></div>
<div class="boxA">
    <table cellpadding="0" cellspacing="0"></table>
        <?php foreach($items as $item): ?>
    <div class="box1">
    <Div Align="center">
    <div>
        <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;">
        <?= $item->name ?>
               \<?= $item->price ?> 円
                <a href="/detail/<?= $item->id ?>"> 詳細 </a><br>

            <a href="/detail/<?= $item->id ?>">  <img src="<?= $item->URL ?>" alt=""></a></div>

</span>
        </div></Div></div></div>

<?php endforeach; ?>

</body>

</html>