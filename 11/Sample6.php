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

$qry = "SELECT * FROM product WHERE name LIKE :word";

if(isset($_POST["sort"]) && $_POST["sort"] == "desc")
    $qry = $qry . "DESC";

$stmt = $db->prepare($qry);
$stmt->execute();

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>単価</th>
</tr>

<?php

while($value = $stmt->fetch()){
    $id = $value["id"];
    $name = $value["name"];
    $price = $value["price"];
    print "<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td></tr>\n";
}

$db = null;

?>

</table>

<form action="http://localhost/YPHPSample/11/Sample7.php" method="post">
<input type="text" name="word"/>
<input type="submit" value="検索"/>
</form>
</body>
</html>
