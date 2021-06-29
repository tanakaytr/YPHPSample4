<form action="work10.php" method="post">
    <h1>フォーム</h1>
    <table>
	    <tr>
	        <th>名前</th>
	        <td>
	            <input type="text" class="form-control" name="name" value="<?php print $data->getName(); ?>">
	        </td>
	    </tr>
	    <tr>
	        <th>年齢</th>
	        <td>
	            <input type="text" class-"form-control" name="age" value="<?php print $data->getAge(); ?>">
	        </td>
	    </tr>
	    <tr>
	        <th>趣味</th>
	        <td>
	            <input type="text" class="form-control" name="hobby" value="<?php print $data->getHobby(); ?>">
	        </td>
	    </tr>
        <tr>
            <th>都道府県</th>
            <td>
                <select class="form-control" name="prefecture">
	            <option value=" " <?php if($data->getPrefecture() == " ") print "selected=\"selected\" "; ?>>選択してください</option>
	            <option value="tokyo" <?php if($data->getPrefecture() == "tokyo") print "selected=\"selected\" "; ?>>東京</option>
	            <option value="kanagawa" <?php if($data->getPrefecture() == "kanagawa") print "selected=\"selected\""; ?>>神奈川</option>
	            <option value="chiba" <?php if($data->getPrefecture() == "chiba") print "selected=\"selected\""; ?>>千葉</option>
	            <option value="saitama" <?php if($data->getPrefecture() == "saitama") print "selected=\"selected\""; ?>>埼玉</option>
	            </select>
	        </td>
	    </tr>
        <tr>
            <th>好きな映画</th>
            <td>
            <label for="action">
                <input type="radio" id="action" name="movie" value="action" <?php if($data->getMovie() == "action") print "checked==\"checked\" "; ?>/>
                アクション
            </label>
            <label for="comedy">
                <input type="radio" id="comedy" name="movie" value="comedy" <?php if($data->getMovie() == "comedy") print "checked==\"checked\" "; ?>/>
                コメディ
            </label>
            <label for="suspense">
                <input type="radio" id="suspense" name="movie" value="suspense" <?php if($data->getMovie() == "suspense") print "checked==\"checked\" "; ?>/>
                サスペンス
            </label>
            <label for="sf">
                <input type="radio" id="sf" name="movie" value="sf" <?php if($data->getMovie() == "sf") print "checked==\"checked\" "; ?>/>
                SF
            </label>
            </td>
        </tr>
        <tr>
            <th>好きな音楽</th>
            <td>
                <label for="pop">
                    <input type="checkbox" id="pop" name="music[]" value="pop" <?php if(in_array("pop", $data->getMusic()) ) print "checked=\"checked\" "; ?>/>
                    POP
                </label>
                <label for="rock">
                    <input type="checkbox" id="rock" name="music[]" value="rock" <?php if(in_array("rock", $data->getMusic()) ) print "checked=\"checked\" "; ?>/>
                    ロック
                </label>
                <label for="enka">
                    <input type="checkbox" id="enka" name="music[]" value="enka" <?php if(in_array("enka", $data->getMusic()) ) print "checked=\"checked\" "; ?>/>
                    演歌
                </label>
                <label for="randb">
                    <input type="checkbox" id="randb" name="music[]" value="randb" <?php if(in_array("randb", $data->getMusic()) ) print "checked=\"checked\" "; ?>/>
                    R&B
                </label>
            </td>
        </tr>
        <tr>
            <th>コメント</th>
            <td>
                <textarea class="form-control" id="comment" name="comment" rows="4" cols="40"><?php print $data->getComment(); ?></textarea>
            </td>
        </tr>
	    <tr><th></th><td><input type="submit" class="btn" value="送信"></td></tr>
    </table>
    <input type="hidden" name="action" value="confirm" />
</form>
