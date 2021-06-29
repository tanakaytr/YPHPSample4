<?php
require_once("MyDB.class.php");
$mydb = new MyDB();

$sql = "SELECT f_name, l_name, email FROM usr WHERE prefecture ='東京都' OR prefecture = '神奈川県' ";

$data = $mydb->executeQuery($sql);
?>
<?DOCTYPE html>
<html>
<head>
<title>ワーク3</title>
</head>
<body>
<table border="2">
<?php
$first = true;
while($value = $data->fetch()){
    $keys = array_keys($value);
    if($first){
        print "<tr bgcolor=\"#AAAAAA\">";
        foreach($keys as $key){
            print "<th>{$key}</th>";
        }
        print "</tr>";
        $first = false;
    }
    print "<tr>";
    foreach($keys as $key){
        print "<td>{$value[$key]}</td>";
    }
    print "</tr>";
}
?>
</table>
</body>
</html>
