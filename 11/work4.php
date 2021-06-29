<?php
require_once("MyDB.class.php");
$mydb = new MyDB();

$sql = 'UPDATE employee SET class = ? WHERE "アシスタント" = "シニアアシスタント"';

$data = ["シニアアシスタント"];

$result = $mydb->executePrepareUpdate($sql, $data);
?>
<?DOCTYPE html>
<html>
<head>
<title>ワーク4</title>
</head>
<body>
<?php
if($result){
    print "更新に成功しました。";
} else {
    print "更新に失敗しました。";
}

?>
</body>
</html>
