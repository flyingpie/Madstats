<h2>Login</h2>
<?php
if($core->getAuth()->isLogged()):
	echo 'already logged in';
else:
if(empty($_SESSION['referer'])) $_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
if(isset($_POST['password']) && !empty($_POST['password'])):

if($core->getAuth()->login($_POST['password'])) {
	$referer = $_SESSION['referer'];
	unset($_SESSION['referer']);
	header("location:" . $referer);
} else {
	echo 'invalid password';
}

else: ?>
<div id="login">
<form action="?page=login" method="post">
<input name="password" type="password" />
<input type="submit" value="Login" />
</form>
</div>
<?php endif; ?>
<?php endif; ?>