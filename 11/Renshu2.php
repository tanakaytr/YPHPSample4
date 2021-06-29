<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$dbname = "sqlite:pdb.db";
$usrname = "";
$psword = "";

$db = new PDO($dbname, $usrname, $psword);

$qry = "SELECT * FROM product";

if(isset($_POST["num"]) && $_POST["num"] == "few")
    $qry = $qry . "WHERE num < 30";

$stmt = $db->prepare($qry);
$stmt->execute();

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>在庫状況</th>
</tr>

<?php

while($value = $stmt->fetch()){
    $id = $value["id"];
    $name = $value["name"];
    $num = $value["num"];
    print "<tr><td>{$id}</td><td>{$name}</td><td>{$num}</td></tr>\n";
}

$db = null;

?>

</table>

<form action="http://localhost/YPHPSample/11/Renshu2.php" method="post">
<input type="radio" name="num" value="all"
<?php if(!isset($_POST["num"]) || $_POST["num"] != "few")
print "checked"; ?>
/>全体表示
<input type="radio" name="num" value="few"
<?php if(isset($_POST["num"]) && $_POST["num"] == "few")
print "checked"; ?>
/>僅少表示
<input type="submit" value="表示"/>
</form>
</body>
</html>
