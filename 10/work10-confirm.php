<form action="work10.php" method="post">
    <table>
        <tr><th>名前</th><td><?php print $data->getName(); ?></td></tr>
        <tr><th>年齢</th><td><?php print $data->getAge(); ?></td></tr>
        <tr><th>趣味</th><td><?php print $data->getHobby(); ?></td></tr>
        <tr><th>都道府県</th><td><?php print $data->getPrefecture(); ?></td></tr>
        <tr><th>好きな映画</th><td><?php print $data->getMovie(); ?></td></tr>
        <tr><th>好きな音楽</th><td><?php foreach($data->getMusic() as $val) print $val. "&nbsp;"; ?></td></tr>
        <tr><th>コメント</th><td><?php print $data->getComment(); ?></td></tr>
        <tr>
            <th></th>
            <td>
                <input type="hidden" name="action" value="finish" />
                <input type="hidden" name="name" value="<?php print $data->getName(); ?>" />
                <input type="hidden" name="age" value="<?php print $data->getAge(); ?>" />
                <input type="hidden" name="hobby" value="<?php print $data->getHobby(); ?>" />
                <input type="hidden" name="prefecture" value="<?php print $data->getPrefecture(); ?>" />
                <input type="hidden" name="movie" value="<?php print $data->getMovie(); ?>" />
                <input type="hidden" name="comment" value="<?php print $data->getComment(); ?>" />
                <?php foreach($data->getMusic() as $val) {
                    print "<input type=\"hidden\" name=\"music[]\" value=\"{$val}\" />";
                }
                ?>
                <a href="work10.php">戻る</a>
                <input type="submit" class="btn btn-primary" value="送信" />
            </td>
        </tr>
    </table>
</form>
