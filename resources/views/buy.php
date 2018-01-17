<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>購入画面</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzG9L4RcaiAUA7sSDPpZcAmzNTMB-lq71AZJqLcyu1vJN5wrr9qw">
<Div Align="center">
<form action="/buy" method="POST">
    <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 300px;"> <?=csrf_field()?>
    <span style="background-color:#ffffff"> 氏名　　
    <input type="text" name="name" value="<?=old('name') ?>">
    <?php if($errors->first('name')):?>
        <br> <font color="red">名前を入力してください。</font>
    <?php endif;?>
    </span><br>
    <span style="background-color:#ffffff">Ｅメール
    <input type="text" name="email" value="<?=old('email') ?>">
    <?php if($errors->first('email')):?>
        <br><font color="red"> Emailを入力してください。</font>
    <?php endif;?>
    </span><br>
    <span style="background-color:#ffffff">電話番号
    <input type="text" name="tel" value="<?=old('tel') ?>">
    </span><br>
    <span style="background-color:#ffffff">住所　　
    <input type="text" name="address"value="<?=old('address') ?>">
    </span><br>
        　　 　　　　　　　　　　<input type="submit" value="送信"></div>
</form>
    <span style="background-color:#ffffff">
<div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333; background-color: #ffffff;width: 100px;"><a href="/cart">カートへ</a><br>
    <a href="/">トップへ </a></Div></span></Div>
</Div>
</body>

</html>