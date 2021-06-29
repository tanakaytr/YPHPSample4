<?php
require_once("MyDB.class.php");

$mydb = new MyDB();

$prefecture = "";
if(isset($_POST["prefecture"])){
    $prefecture = $_POST["prefecture"];
    $data = [$prefecture];
    $sql = "SELECT*FROM usr WHERE prefecture = ?";
} else {
    $data = [];
    $sql = "SELECT*FROM usr";
}

$result = $mydb->executePrepareQuery($sql,$data);
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>
<form method="POST" action="work5.php">
<label for="prefecture">都道府県</label>
<input type="text" id="prefecture" name="prefecture" value="<?php print htmlspecialchars($prefecture,ENT_QUOTES,"UTF-8"); ?>" />
<input type="submit" value="送信" />
</form>
<hr />
<?php
if($result && $result->rowCount() > 0){
?>
	<table border="2">
	<?php
	$first = true;
	while($value = $result->fetch()){
	    $keys = array_keys($value);
	    if($first){
	        print "<tr bgcolor=\"#AAAAAA\">";
	        foreach($keys as $key){
	            print "<th>{$key}</th>";
	        }
	        print "</tr>";
	        $fisrt = false;
	    }
	    print "<tr>";
	    foreach($keys as $key){
	        print "<td>{$value[$key]}</td>";
	    }
	    print "</tr>";
	}
	?>
	</table>
<?php
} else {
    print "<div>データはありません</div>";
}
?>
</body>
</html>

