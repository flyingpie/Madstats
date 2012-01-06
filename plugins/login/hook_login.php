<?php
if($core->getAuth()->isLogged()) {
	echo 'Logged in <br /><a href="?page=logout">' . $lang->Login->ButtonLogout . '</a>';
} else {
	echo '<a href="?page=login">' . $lang->Login->ButtonLogin . '</a>';
}
?>