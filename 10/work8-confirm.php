<form action="work9.php" method="post">
    <table>
        <tr><th>名前</th><td><?php print $name; ?></td></tr>
        <tr><th>年齢</th><td><?php print $age; ?></td></tr>
        <tr><th>趣味</th><td><?php print $hobby; ?></td></tr>
        <tr><th>都道府県</th><td><?php print $prefecture; ?></td></tr>
        <tr><th>好きな映画</th><td><?php print $movie; ?></td></tr>
        <tr><th>好きな音楽</th><td><?php foreach($music as $val) print $val. "&nbsp;"; ?></td></tr>
        <tr><th>コメント</th><td><?php print $comment; ?></td></tr>
        <tr><th></th><td><a href="work9.php">戻る</a></td></tr>
    </table>
</form>
