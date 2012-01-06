Logout
<?php
$core->getAuth()->logout();
header("location: index.php");
?>