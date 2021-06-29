<!DOCTYPE html>
<html>
<head>
<title>work5</title>
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
<form action="work5.php" method="post">
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
        <tr><th>好きな映画</th><td>
            <label for"movie" class="col-md-3 control-label"></label>
            <label for="action">
                <input type="radio" id="action" name="movie" value="action" />
                アクション
            </label>
            <label for="comedy">
                <input type="radio" id="comedy" name="movie" value="comedy" />
                コメディ
            </label>
            <label for="suspense">
                <input type="radio" id="suspense" name="movie" value="suspense" />
                サスペンス
            </label>
            <label for="sf">
                <input type="radio" id="sf" name="movie" value="sf" />
                SF
            </label>
        </td></tr>
        <tr><th>好きな音楽</th><td>
            <label for="pop">
                <input type="checkbox" id="pop" name="music[]" value="pop" />
                POP
            </label>
            <label for="rock">
                <input type="checkbox" id="rock" name="music[]" value="rock" />
                ロック
            </label>
            <label for="enka">
                <input type="checkbox" id="enka" name="music[]" value="enka" />
                演歌
            </label>
            <label for="randb">
                <input type="checkbox" id="randb" name="music[]" value="randb" />
                R&B
            </label>
            </td></tr>
    
	    <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
    
    
    
    
</form>
</body>
</html>
