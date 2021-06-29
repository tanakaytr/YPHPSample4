<!DOCTYPE html>
<html>
<head>
<title>work3</title>
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
    padding : 2px 5px;
    width : 80%;
    line-height : 25px;
}
input.btn{
    padding : 2px 5px;
    height : 40px;
    width : 100px;
}
</style>
</head>
<body>
<form action="work3.php" method="post">
    <h1 class= "col-md-12 text-center">フォーム</h1>
    <table>
	    <tr><th>名前</th><td><input type="text" class="form-control" name="name" value="<?php 
	if(isset($_POST["name"])){
        print $_POST["name"];
    } ?>" /></td></tr>
	    <tr><th>年齢</th><td><input type="text" class-"form-control" name="age" value="<?php
    if(isset($_POST["age"])){
        print $_POST["age"];
    } ?>" /></td></tr>
	    <tr><th>趣味</th><td><input type="text" class="form-control" name="hobby" value="<?php
    if(isset($_POST["hobby"])){
        print $_POST["hobby"];
    } ?>" /></td></tr>
        <tr><th>都道府県</th><td><select class="form-control" name="prefecture">
	        <option value="">選択してください</option>
	        <option value="tokyo">東京</option>
	        <option value="kanagawa">神奈川</option>
	        <option value="chiba">千葉</option>
	        <option value="saitama">埼玉</option>
	    </select></td></tr>
    
    
    
	    <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
    
    
    
    
</form>
</body>
</html>
