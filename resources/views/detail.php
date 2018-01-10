<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品詳細</title>
</head>

<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzG9L4RcaiAUA7sSDPpZcAmzNTMB-lq71AZJqLcyu1vJN5wrr9qw"><body>
<Div Align="center">

 <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 400px;">
    <span style="background-color:#ffffff"> <font size="5"><?= $item->name ?><br>
     <img src="<?= $item->URL ?>" alt=width="300" height="300"><br>

    \<?= $item->price ?> 円
    <form action="/cart/<?= $item->id ?>" method="POST">
        <?= csrf_field() ?>
        <input type="submit" value="カートに追加する">
    </form></div>
        <a href="/"><div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 100px;">トップへ</div> </a></font></span>
</div>
</body>
</html>
