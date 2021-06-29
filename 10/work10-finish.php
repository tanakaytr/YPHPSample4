<form action="work10.php" method="post">
<h1>申し込みありがとうございました</h1>
<p>以下の情報で申し込みを受け付けました</p>
	<table>
	    <tr><th>名前</th><td><?php print $data->getName(); ?></td></tr>
	    <tr><th>年齢</th><td><?php print $data->getAge(); ?></td></tr>
	    <tr><th>趣味</th><td><?php print $data->getHobby(); ?></td></tr>
	    <tr><th>都道府県</th><td><?php print $data->getPrefecture(); ?></td></tr>
	    <tr><th>好きな映画</th><td><?php print $data->getMovie(); ?></td></tr>
	    <tr><th>好きな音楽</th><td><?php foreach($data->getMusic() as $val) print $val."&nbsp;"; ?></td></tr>
	    <tr><th>コメント</th><td><?php print $data->getComment(); ?></td></tr>
	</table>
</form>
