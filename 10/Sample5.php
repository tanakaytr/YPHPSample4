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

<form action="http://localhost/YPHPSample/10/Sample5.php"
              method="post">
<?php

foreach($product as $id => $value){
    print "<input type=\"ratio\" name=\"product\"
            value=\"{$value}\"";
    if($id == 0) {print "checked";}
    print "/>";
    print $value;
}

?>

<input type="submit" value="送信"/>
</form>

<?php

if(isset($_POST["product"])){
    print "「{$_POST["product"]}」をお買い上げいただきました。<br/>\n";
}
?>

</body>
</html>
