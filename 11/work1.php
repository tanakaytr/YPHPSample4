<!DOCTYPE html>
<html>
<title>ワーク1</title>
<head>
<body>
<?php
$username = "root";
$password = "";
$database = "workbook";
$host = "localhost";
$dsn = "mysql:host={$host};dbname={$database};charset=utf8";
$db = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = "SELECT * FROM employee";
$data = $db->query($query);
?>

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
$db = null;
?>

</table>
</body>
</html>

