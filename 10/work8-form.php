<form action="work8.php" method="post">
    <h1>フォーム</h1>
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
	        <option value=""<?php if($prefecture == " ") print "selected=\"selected\""; ?>>選択してください</option>
	        <option value="tokyo" <?php if($prefecture == "tokyo") print "selected=\"selected\""; ?>>東京</option>
	        <option value="kanagawa" <?php if($prefecture == "kanagawa") print "selected=\"selected\""; ?>>神奈川</option>
	        <option value="chiba" <?php if($prefecture == "chiba") print "selected=\"selected\""; ?>>千葉</option>
	        <option value="saitama" <?php if($prefecture == "saitama") print "selected=\"selected\""; ?>>埼玉</option>
	    </select></td></tr>
        <tr><th>好きな映画</th><td>
            <label for"movie" class="col-md-3 control-label"></label>
            <label for="action">
                <input type="radio" id="action" name="movie" value="action" <?php if($movie == "action") print "checked==\"checked\""; ?>/>
                アクション
            </label>
            <label for="comedy">
                <input type="radio" id="comedy" name="movie" value="comedy" <?php if($movie == "comedy") print "checked==\"checked\""; ?>/>
                コメディ
            </label>
            <label for="suspense">
                <input type="radio" id="suspense" name="movie" value="suspense" <?php if($movie == "suspense") print "checked==\"checked\""; ?>/>
                サスペンス
            </label>
            <label for="sf">
                <input type="radio" id="sf" name="movie" value="sf" <?php if($movie == "sf") print "checked==\"checked\""; ?>/>
                SF
            </label>
        </td></tr>
        <tr><th>好きな音楽</th><td>
            <label for="pop">
                <input type="checkbox" id="pop" name="music[]" value="pop" <?php if(in_array("pop", $music) ) print "checked=\"checked\""; ?>/>
                POP
            </label>
            <label for="rock">
                <input type="checkbox" id="rock" name="music[]" value="rock" <?php if(in_array("rock", $music) ) print "checked=\"checked\""; ?>/>
                ロック
            </label>
            <label for="enka">
                <input type="checkbox" id="enka" name="music[]" value="enka" <?php if(in_array("enka", $music) ) print "checked=\"checked\""; ?>/>
                演歌
            </label>
            <label for="randb">
                <input type="checkbox" id="randb" name="music[]" value="randb" <?php if(in_array("randb", $music) ) print "checked=\"checked\""; ?>/>
                R&B
            </label>
            </td></tr>
        <tr><th>コメント</th><td>
            <textarea class="form-control" id="comment" name="comment" rows="4" cols="40"><?php print $comment; ?></textarea>
        </td></tr>
    
	    <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
</form>
</body>
</html>
