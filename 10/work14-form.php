<form action="work14.php" method="post">
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
	        <th></th>
	        <td><input type="submit" class="btn" value="送信"></td>
	    </tr>
    </table>
    <input type="hidden" name="action" value="confirm" />
</form>
