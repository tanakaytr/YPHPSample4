<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$product = ["鉛筆", "消しゴム", "定規", "コンパス", "ボールペン"];

?>

<h2>商品のご選択</h2>

<form action="http://localhost/YPHPSample/10/Sample4.php"
method="post">
<input size="5" name="product">

<?php

foreach($product as $value){
    print "<option value=\"{$value}\">{$value}</option>";
}

?>

</select>
<input type="submit" value="送信"/>
</form>

<?php

if(isset($_POST["product"]))
    print "「{$_POST["product"]}」をお買い上げいただきました。<br/>\n";

?>

</body>
</html>
