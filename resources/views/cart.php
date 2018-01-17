<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>カート</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzG9L4RcaiAUA7sSDPpZcAmzNTMB-lq71AZJqLcyu1vJN5wrr9qw">
<Div Align="center">
    <span style="background-color:#ffffff"> <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;">カートの中身 </div></span>
    <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;">
    <?php foreach($items as $index => $item):?>
    <div>
          <img src="<?= $item->URL ?>" alt=""><br>
            <span style="background-color:#ffffff"><?= $item->name ?>
                <?= $item->price ?> 円</span>
        <form action="/cart/delete/<?=$index?>" method="POST">
            <?= csrf_field() ?>
            <input type="submit" value="カートから消去する">
        </form>
        </div>
<?php endforeach; ?>
        <div></div>
        <form action="/cart_delete1" method="POST">
            <?= csrf_field() ?>
            <input type="submit" value="すべて消去する">
        </form>
    </div>
<?php foreach($items as $item): ?>
<?php endforeach; ?>
    <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;"><span style="background-color:#ffffff"><a href="/buy">購入へ </a><br>
            <a href="/">トップへ </a></span>
    </Div></Div>
</body>
</html>
