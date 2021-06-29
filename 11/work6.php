<?php
require_once("MyDB.class.php");

$mydb = new MyDB();

$category_name = "";
if(isset($_POST["category_name"])){
    $category_name = $_POST["category_name"];
    $data = [$category_name];
    $sql = "SELECT
        b.isbn,
        b.title,
        b.price,
        b.publish,
        b.publish_date,
        b.category_id,
        c.category_name
    FROM 
        books AS b
    INNER JOIN
        category AS c
    ON
        b.category_id = c.category_id
    WHERE 
        category_name = ?";
} else {
    $data = [];
    $sql = "SELECT
        b.isbn,
        b.title,
        b.price,
        b.publish,
        b.publish_date,
        b.category_id,
        c.category_name
    FROM 
        books AS b
    INNER JOIN
        category AS c
    ON
        b.category_id = c.category_id";
}

$result = $mydb->executePrepareQuery($sql,$data);
?>
<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>
<form method="POST" action="work6.php">
<label for="prefecture">カテゴリー名</label>
<input type="text" id="category_name" name="category_name" value="<?php print htmlspecialchars($category_name,ENT_QUOTES,"UTF-8"); ?>" />
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

