<?php 
    session_start();
    
    $name = "";
    $age = "";
    $hobby = "";
    
    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
    }
    
    if(isset($_POST["name"])){
        $name = $_POST["name"];
        $_SESSiON["name"] = $name;
    }

?>

<!DOCTYPE html>
<html>
<head>
<title>work11</title>
<style type = "text/css">
form{
    width : 500px;
    margin : 0 auto;
    padding : 20px;
    text-align : center;
    background-color : #b5eafc;
}
table{
    width : 100%;
}
th{
    text-align : right;
    font-weight : normal;
}
td{
    text-align : left;
}
input.form-control{
    padding : 2px, 5px;
    width : 80%;
    line-height : 25px;
}
input.btn{
    padding : 2px 5px;
    height : 40px;
    width : 100px;
}
select.form-control, option{
    height : 40px;
    display : block;
}
</style>
</head>
<body>
<form action="work1.php" method="post">
    <table>
    <tr>
    <th>名前</th>
	<td>
	    <input type="text" class="form-control" name="name" value="<?php print $name; ?>">
	</td>
    </tr>
    <tr>
        <th>年齢</th>
        <td>
            <input type="text" class-"form-control" name="age" value="<?php print $age; ?>">
        </td>
    </tr>
    <tr>
        <th>趣味</th>
        <td>
            <input type="text" class="form-control" name="hobby" value="<?php print $hobby; ?>">
        </td>
    </tr>
    <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
    
</form>
</body>
</html>
