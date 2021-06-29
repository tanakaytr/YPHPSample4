<form action="work15.php" method="post">
    <h1>ログイン</h1>
    <?php if($error_message->is_error("auth")){ ?>
        <div style="margin:10px;padding:10px;border:1px solid red;background-color:red;color:#fff;">
        <?php print $error_message->getErrorMessage("auth"); ?>
    </div>
    <?php } ?>
	<table>
	    <tr>
	        <th>ID</th>
	        <td>
	            <input type="text" class="form-control" name="id" value="<?php print $data->getId(); ?>">
	        </td>
	    </tr>
	    <?php if($error_message->is_error("id")){ ?>
	    <tr>
	        <th></th>
	        <td style="color:red">
	        <?php print $error_message->getErrorMessage("id"); ?>
	        </td>
	    </tr>
	    <?php } ?>
	    <tr>
	        <th>パスワード</th>
	        <td>
	            <input type="password" class="form-control" name="password" value="<?php print $data->getPassword(); ?>">
	        </td>
	    </tr>
	    <?php if($error_message->is_error("password")) { ?>
	    <tr>
	        <th></th>
	        <td style="color:red">
	        <?php print $error_message->getErrorMessage("password"); ?>
	        </td>
	    </tr>
	    <?php } ?>
	    <tr><th></th>
	        <td>
	            <input type="hidden" name="action" value="auth" />
	            <input type="submit" class="btn btn-info" value="ログイン">
	        </td>
	    </tr>
	</table>
</form>
